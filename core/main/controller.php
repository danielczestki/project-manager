<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:32
 */
class controller
{

    public function loadController($controller, $action = 'index')
    {
        if(file_exists("core/controllers/".$controller.".php"))
        {
            require_once "core/controllers/".$controller.".php";
            $controllerInstance = register::registry($controller);
            $controllerInstance->$action();
        }
        else
        {
            echo "Brak kontrollera. ".$controller." ".__FUNCTION__." ".__CLASS__;
        }
    }

    public function loadView($view)
    {
        $viewInstance = register::registry('view');
        $viewInstance->getTemplate($view);

        if($viewInstance != null or $viewInstance != false)
        {
            return false;
        }

        return true;
    }

    public function __set($name, $value)
    {
        $this->$value = $name;
    }

    public function __get($name)
    {
        return $this->$name;
    }




}