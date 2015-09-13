<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 18.07.2015
 * Time: 22:15
 */
require_once "core/main/project.php";

class home extends controller
{

    public function index()
    {
        $this->loadView("admin/index");
    }

    public function projects()
    {	
    	$project = new project;
    	$project->loadProject();
    	//$this->loadView("projects");
    	
    }

}