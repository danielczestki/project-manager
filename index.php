<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:29
 */

require_once "init.php";
require_once "core/main/router.php";

$router = new Router;
$router->dispatch();


echo "<pre>";
    var_dump($_SERVER);
echo "</pre>";

/*
 * todo
 *  - plik instalacyjny
 *  - baza danych
 *  - APP_PATH i PROJECT_PATH
 */