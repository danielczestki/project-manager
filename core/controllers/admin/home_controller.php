<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 18.07.2015
 * Time: 22:15
 */
class home_controller extends controller
{

    public function index()
    {
        $this->loadView("admin_home");
    }


}