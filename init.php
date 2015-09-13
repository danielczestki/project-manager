<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:30
 */
define('APP_PATH', "");
define('PROJECT_PATH', "");


function __autoload($classname)
{
    if(file_exists($classname.".php"))
    {
        require_once $classname.".php";
    }
    elseif(file_exists("core/".$classname.".php"))
    {
        require_once "core/".$classname.".php";
    }
    elseif(file_exists("core/libs/".$classname.".php"))
    {
        require_once "core/libs/".$classname.".php";
    }
    elseif(file_exists("core/controllers/".$classname.".php"))
    {
        require_once "core/controllers/".$classname.".php";
    }
    elseif(file_exists("core/controllers/admin/".$classname.".php"))
    {
        require_once "core/controllers/admin/".$classname.".php";
    }
    elseif(file_exists("core/main/".$classname.".php"))
    {
        require_once "core/main/".$classname.".php";
    }
}