<?php

class Controller
{
	protected $model;
	
	public function __construct(&$model)
	{
		$this->model = $model;
	}
	
	public function logout()
	{
		$_SESSION['authenticated'] = false;
		
		//redirect
		header( 'Location: index.php');
	}
}