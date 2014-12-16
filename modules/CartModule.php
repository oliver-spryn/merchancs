<?php
require_once('View.php');
require_once('Controller.php');

class CartModel extends Model
{

}

class CartItem
{
	public $image;
	public $name;
	public $description;
	public $pageURL;
	public $price;
	public $id;
	public $num;
	public function __construct($image, $name, $desc, $url, $price, $id, $num)
	{
		$this->image = $image;
		$this->name = $name;
		$this->description = $desc;
		$this->pageURL = $url;
		$this->price = $price;
		$this->id = $id;
		$this->num = $num;
	}
}

class CartView extends View
{	
	public $cartItems;
	protected function getData()
	{
		return array(
			'page' => 'cart',
		);			
	}
	public function fetchCartData()
	{
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
		$query = "SELECT * FROM `tbl_cart` INNER JOIN tbl_products ON tbl_cart.pr_ID = tbl_products.pr_ID WHERE tbl_cart.usr_ID = (SELECT usr_ID from tbl_users where usr_Uname = '".$_SESSION['uname']."')";
		$result = $db->query($query);
		$this->cartItems = array();
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$this->cartItems[] = new CartItem("images/".$row['pr_Image'], $row['pr_Name'], $row['pr_Description'], "#", "$".$row['pr_Price'],$row['pr_ID'],$row['ct_Quantity']);
			}
		}
	}
	public function clearCart() {
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MYSQLi($host, $dbuser, trim($dbpass), $database);
		$query = "DELETE FROM tbl_cart WHERE usr_ID = (SELECT usr_ID FROM tbl_users WHERE usr_UName = '".$_SESSION['uname']."')";
		if($db->query($query)===TRUE) {
			echo "Cart Deleted";
		}
		else {
			echo "Error Deleting Cart";
		}
	}
	public function removeItem($itemID) {
		$host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MYSQLi($host, $dbuser, trim($dbpass), $database);
		$query = "DELETE FROM tbl_cart WHERE pr_ID = ".$itemID." AND usr_ID = (SELECT usr_ID FROM tbl_users WHERE usr_UName = '".$_SESSION['uname']."')";
		if($db->query($query)===TRUE) {
			echo "Item Deleted";
		}
		else {
			echo "Error Deleting Item";
		}
	}
}

class CartController extends Controller
{

}