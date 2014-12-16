<?php
require_once('View.php');
require_once('Controller.php');

class ProductModel extends Model {
	
}

class Product {
	public $ID;
	public $name;
	public $description;
	public $price;
	public $image;
	public $category;
	
	public function __construct($ID, $name, $description, $price, $image, $category) {
		$this->ID = $ID;
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->image = $image;
		$this->category = $category;
	}
	
	public static function GetProduct($in) {
		global $db;
		
		$stmt = $db->prepare("SELECT `pr_ID`, `pr_Name`, `pr_Description`, `pr_Price`, `pr_Image`, `cat_ID` FROM `tbl_products` WHERE `pr_ID` = ?");
		$stmt->bind_param("i", $in);
		
	//Did anuthing come back?
		if(!$stmt->execute()) {
			return false;
		}
		
	//Return things!
		$stmt->bind_result($prID, $prName, $prDescription, $prPrice, $prImage, $catID);
		$stmt->fetch();
		
		return new Product($prID, $prName, $prDescription, $prPrice, $prImage, $catID);
	}
	
	public static function GetProducts() {
		global $db;
		
		$stmt = $db->prepare("SELECT `pr_ID`, `pr_Name`, `pr_Description`, `pr_Price`, `pr_Image`, `cat_ID` FROM `tbl_products` WHERE `pr_ID` = ?");
		$stmt->bind_param("i", $in);
		
	//Did anuthing come back?
		if(!$stmt->execute()) {
			return false;
		}
		
	//Return things!
		$ret = array();
		$stmt->bind_result($prID, $prName, $prDescription, $prPrice, $prImage, $catID);
		
		while($stmt->fetch()) {
			array_push($ret, new Product($prID, $prName, $prDescription, $prPrice, $prImage, $catID));
		}
		
		return $ret;
	}
}

class ProductView extends View
{
	protected $item;
	
	public function fetch()
	{
		$this->item = Product::GetProduct($_GET['id']);
		
		if(!isset($_GET['id']) || !$this->item) {
			header("Location: index.php");
			exit;	
		}
	}
	
	protected function getData()
	{
		return array(
			'page' => 'product',
		);			
	}
}

class ProductController extends Controller
{

}