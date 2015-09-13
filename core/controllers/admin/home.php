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
    protected $importedModels = [];

    public function __construct()
    {
        $this->importedModels['adminModel'] = $this->loadModel('admin/adminModel');
        $this->mainModel = $this->loadModel('mainModel');

    }

    public function index()
    {
        $this->loadView("admin/index");
    }

    public function projects()
    {	
    	$project = new project;
    	$project->loadProject();
    	//$this->loadView("projects");

        $this->mainModel->test();
    }

}