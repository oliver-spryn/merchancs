<?php
require_once('View.php');
require_once('Controller.php');

class AccountModel extends Model
{

}

class AccountView extends View
{	
	protected function getData()
	{
		return array(
			'page' => 'account',
		);			
	}
}

class AccountController extends Controller
{

}