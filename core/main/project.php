<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 20.07.2015
 * Time: 10:41
 */
class project
{

    public function loadProject($name = false, $user = false)
    {
        $this->userProjects('project1');
    }

    public function userProjects($user)
    {
    	echo "Klasa". __CLASS__. "<br>";
    	if(file_exists('app/projects/'.$user))
    	{
    		var_dump($user);
    	}
    }

}