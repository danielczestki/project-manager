<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:32
 */
//namespace PM\Core\Main;

class controller
{


    public function loadController($controller, $action = 'index', $is_dir)
    {
        if($is_dir === false)
        {
            if(file_exists("core/controllers/".$controller.".php"))
            {
                require_once "core/controllers/".$controller.".php";   
                $controllerInstance = register::registry($controller);
                $controllerInstance->$action();
            }
            else
            {
                echo "Brak kontrollera: ".$controller." ".__FUNCTION__." ".__CLASS__;
            }
        }
        else
        {
            var_dump($is_dir);

            if(file_exists("core/controllers/".$is_dir."/".$controller.".php"))
            {
                require_once "core/controllers/".$is_dir."/".$controller.".php";   
                $controllerInstance = register::registry($controller);
                $controllerInstance->$action();
            }
            else
            {
                echo "Brak kontrollera: ".$controller." ".__FUNCTION__." ".__CLASS__;
            }
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

    public function loadModel($model)
    {

        $modelInstance = register::registry('model');
        $model = $modelInstance->loadModel($model);

        if($modelInstance == null or $modelInstance == false)
        {
            return false;
        }

        return $model;
    }


//    public function __set($name, $value)
//    {
//        $this->$value = $name;
//    }
//
//    public function __get($name)
//    {
//        return $this->$name;
//    }




}