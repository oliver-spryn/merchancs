<?php

class Model
{
	public $xml;	

	public function __construct()
	{
		$this->xml = simplexml_load_file("items.xml");		
	}	
}