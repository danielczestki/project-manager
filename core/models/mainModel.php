<?php 

//namespace PM\Core\Models;
class mainModel{

	public $args = [
		'host' => "",
		'username' => "",
		'password' => "",
		'db_name' => ""
	];

	public $test = 'test';

	public function __construct($config)
	{
		$this->host = $config['host'];
		$this->username = $config['username'];
		$this->password = $config['password'];
		$this->db_name = $config['db_name'];
	}

	public function connect()
	{

	}
}
