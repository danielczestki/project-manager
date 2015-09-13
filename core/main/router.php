<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:31
 */
//namespace PM\Core\Main;

class Router
{
    private $url;
    private $controller;
    private $action;
    private $isDir;
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

        if(!is_dir("core/controllers/".$urlExploded[0]))
        {

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

            $this->isDir = false;
        }
        else
        {   
            
            if(!isset($urlExploded[1]) or ($urlExploded[1] == ""))
            {
                $urlExploded[1] = "home";
            }

            $this->controller = $urlExploded[1];

            if(!isset($urlExploded[2]) or ($urlExploded[2] == ""))
            {
                $urlExploded[2] = "index";
            }
            $this->action = $urlExploded[2];
            $this->isDir = $urlExploded[0];

            array_shift($urlExploded);
            array_shift($urlExploded);

            if(count($urlExploded != 0))
            {
                $this->params = $urlExploded;
            }

        }

        
    }

    public function getController()
    {   

        return $this->controller;
    }

    public function dispatch()
    {   
        $controller = register::registry("controller");
        $controller->loadController($this->controller, $this->action, $this->isDir);

    }

}