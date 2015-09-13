<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:31
 */
class Router
{
    private $url;
    private $controller;
    private $action;
    private $params = array();

    public function __construct()
    {

        if(isset($_GET['page']) and !empty($_GET['page']))
        {

            $this->url = $_GET['page'];
        }

        $urlExploded = explode('/', $this->url);

        echo "<pre>";
            var_dump($urlExploded);
        echo"</pre>";

        $this->controller = $urlExploded[0];
        if($urlExploded[1] == "")
        {
            $urlExploded[1] = "index";
        }
        $this->action = $urlExploded[1];

        array_shift($urlExploded);
        array_shift($urlExploded);

        if(count($urlExploded != 0))
        {
            $this->params = $urlExploded;
        }

    }

    public function getController()
    {
        return $this->controller;
    }

    public function dispatch()
    {

        $controller = register::registry("controller");
        $controller->loadController($this->controller, $this->action);

    }
    //todo
    // 1. rozkodowywanie adresu url
    // 2.


}