<?php
//namespace PM\Core\Main;

class config
{

	protected $data;
	protected $def;

	public function load($config)
	{
		if(file_exists("core/configs/".$config.".php"))
		{
			$this->data = require_once "core/configs/".$config.".php";
		}
		else
		{
			echo "Plik konfiguracyjny nie zostal znaleziony";
		}
	}

	public function get($name, $def = null)
	{

		$this->def = $def;

		$parts = explode(".", $name);

		//var_dump($parts);
		$data = $this->data;

		foreach ($parts as $part) 
		{
			if(isset($data[$part]))
			{
				$data = $data[$part];
				//var_dump($this->data);
			}
			else
			{
				$data = $this->def;
				break;
			}
		}

		return $data;

	}


}