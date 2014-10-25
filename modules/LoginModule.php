<?php
require_once('View.php');
require_once('Controller.php');

class LoginModel extends Model
{

}

class LoginView extends View
{
	protected function getData()
	{
		return array(
			'catList' => "",
			'page' => 'login',
		);			
	}
}

class LoginController extends Controller
{
	public function login()
	{
		$_SESSION['authenticated'] = true;
		
		//redirect
		header( 'Location: index.php');
	}
	
	public function forgotPassword()
	{
	}
}