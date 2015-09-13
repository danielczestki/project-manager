<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 24.06.15
 * Time: 19:32
 */
//namespace PM\Core\Main;



class model
{

    protected $host;
    protected $username;
    protected $password;
    protected $db_name;

    protected $conn;

    /**
     * @param $config
     */
    public function __construct()
    {
        $config = register::registry("config");
        $config->load(PROJECT_TYPE);
        $config = $config->get('db');


        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];

        $this->connect();
    }

    public function connect()
    {
        $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name , $this->username , $this->password);

        return $this->conn;
    }


    public function loadModel($name)
    {
        echo "Funkcja: ".__FUNCTION__."<br>";

        if(file_exists("core/models/".$name.".php"))
        {
            require_once "core/models/".$name.".php";
            $obj = explode('/', $name);
            $name = end($obj);
            return new $name;
        }
        else
        {
            echo "Błąd ładowania loadModel w klasie ".__CLASS__;
        }
    }
}