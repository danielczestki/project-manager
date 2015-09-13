<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:32
 */
namespace PM\Core\Main;

class view
{

    public function getTemplate($name)
    {
        if(file_exists("core/views/".$name.".php"))
        {
            require_once "core/views/".$name.".php";
        }
        else
        {
            echo "Błąd ładowania getTemplate";
        }
    }


}