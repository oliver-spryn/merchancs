<?php
require_once('View.php');
require_once('Controller.php');

class LoginModel extends Model
{

}

class Login {
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
	
	public static function Auth($u, $p) {
		global $db;
		
		$stmt = $db->prepare("SELECT `usr_ID`, `usr_Name`, `usr_UName`, `usr_Email`, `usr_Pass`, `usr_Role`, `usr_Theme` FROM `tbl_users` WHERE `usr_UName` = ? AND `usr_Pass` = MD5( ? )");
		$stmt->bind_param("ss", $u, $p);
		
	//Did anuthing come back?
		if(!$stmt->execute()) {
			return false;
		}
		
	//Return things!
		$stmt->bind_result($usrID, $usrName, $usrEmail, $usrUName, $usrPass, $usrRole, $usrTheme);
		$stmt->fetch();
		
		return new Login($usrID, $usrName, $usrEmail, $usrUName, $usrPass, $usrRole, $usrTheme);
	}
}

class LoginView extends View
{
	public function auth() {
		if(isset($_POST['username']) && isset($_POST['password'])) {
			$auth = Login::Auth($_POST['username'], $_POST['password']);
			
			if($auth) {
				$_SESSION['authenticated'] = true;
				$_SESSION['uname'] = $auth->uname;
				$_SESSION['role'] = $auth->role;
								
				header("Location: index.php");
			} else {
				header('Location: index.php?page=login');
				exit;
			}
		}	
	}
	
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