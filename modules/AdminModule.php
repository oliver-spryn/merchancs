<?php
require_once('View.php');
require_once('Controller.php');

class AdminModel extends Model
{

}

class AdminView extends View
{	
	protected function getData()
	{
		return array(
			'page' => 'admin',
		);			
	}
}

class AdminController extends Controller
{

}