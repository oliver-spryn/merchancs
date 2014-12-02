<?php
require_once('View.php');
require_once('Controller.php');

class AccountModel extends Model
{

}

class AccountView extends View
{	
	public $user;
	public $email;
	public $password;
	public $payment;
	public $shipping;
	protected function getData()
	{
		return array(
			'page' => 'account',
		);			
	}
	public function fetchAccountInfo() 
	{
		//Pull data from DB
		$this->user = "User";
		$this->email = "user123@gcc.edu";
		$this->password = "asdfjkl";
		$this->payment = "Credit Card|Master Card|XXXX-XXXX-XXXX-1234";
		$this->shipping = "200 Campus Dr.|Grove City, PA 16127";
	}
}

class AccountController extends Controller
{
	public $newPassword; 
	public function changeEmail() 
	{
		//Make query to database
	}
	public function changePassword()
	{
		//Make query to database
	}
	public function changePayment()
	{
		//Make query to database
	}
	public function changeShipping()
	{
		//Make query to database
	}
	
}