<?php
require_once('View.php');
require_once('Controller.php');

class UsersModel extends Model
{

}

class User {
	public $ID;
	public $name;
	public $uname;
	public $email;
	public $pass;
	public $role;
	public $theme;
	
	public function __construct($ID, $name, $uname, $email, $pass, $role, $theme) {
		$this->ID = $ID;
		$this->name = $name;
		$this->uname = $uname;
		$this->email = $email;
		$this->pass = $pass;
		$this->role = $role;
		$this->theme = $theme;
	}
	
	public static function GetAll() {
		global $db;
		
		$stmt = $db->prepare("SELECT `usr_ID`, `usr_Name`, `usr_UName`, `usr_Email`, `usr_Pass`, `usr_Role`, `usr_Theme` FROM `tbl_users`");
		
	//Did anuthing come back?
		if(!$stmt->execute()) {
			return false;
		}
		
	//Return things!
		$ret = array();
		$stmt->bind_result($usrID, $usrName, $usrEmail, $usrUName, $usrPass, $usrRole, $usrTheme);
		
		while($stmt->fetch()) {
			array_push($ret, new User($usrID, $usrName, $usrEmail, $usrUName, $usrPass, $usrRole, $usrTheme));
		}
		
		return $ret;
	}
}

class UsersView extends View
{
	protected $items;
	
	public function fetch() {
		$this->items = User::GetAll();
	}
	
	protected function getData()
	{
		return array(
			'page' => 'users',
		);			
	}
}

class UsersController extends Controller
{

}