<?php

class Model
{
	public $xml;
	public $DB;

	public function __construct()
	{
		$this->xml = simplexml_load_file("items.xml");
		require("DB.php");
		$this->DB = $db;
	}	
}