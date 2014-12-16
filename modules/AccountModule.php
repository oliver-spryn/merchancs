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
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$accountDetailsQuery = "Select usr_UName, usr_Email, usr_Pass, usr_payment, usr_shipping from tbl_users where usr_UName = '". $_SESSION['uname']."';";
		$result = $db->query($accountDetailsQuery);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$this->user = $row['usr_UName'];
				$this->email = $row['usr_Email'];
				$this->password = $row['usr_Pass'];
				$this->payment = $row['usr_payment'];
				$this->shipping = $row['usr_shipping'];
			}
		}
		else {
			echo "0 results";
		}
			
		
		$db->close();
	}
		public $newPassword; 
	public function changeEmail($newEmail) 
	{
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$query = "update tbl_users set usr_Email='" . $newEmail . "' where usr_UName = '". $_SESSION['uname'] . "';";
		if($db->query($query)===TRUE) {
			echo "Updated successfully";
		}
		else {
			echo "Error updating";
		}
	}
	public function changePassword($oldPass, $newPass)
	{
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$hashedOld = md5($oldPass);
		$hashedNew = md5($newPass);
		$query = "update tbl_users set usr_Pass='" . $hashedNew . "' where usr_UName = '". $_SESSION['uname'] . "' and usr_Pass='" . $hashedOld ."';";
		if($db->query($query)===TRUE) {
			echo "Updated successfully";
		}
		else {
			echo "Error updating";
		}
	}
	public function changePayment($newPayment)
	{
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$query = "update tbl_users set usr_payment='" . $newPayment . "' where usr_UName = '". $_SESSION['uname'] . "';";
		if($db->query($query)===TRUE) {
			echo "Updated successfully";
		}
		else {
			echo "Error updating";
		}
	}
	public function changeShipping($newShipping)
	{
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$query = "update tbl_users set usr_shipping='" . $newShipping . "' where usr_UName = '". $_SESSION['uname'] . "';";
		if($db->query($query)===TRUE) {
			echo "Updated successfully";
		}
		else {
			echo "Error updating";
		}
	}
}

class AccountController extends Controller
{

	
}