<?php
require_once('View.php');
require_once('Controller.php');

class SearchModel extends Model
{

}

class Search {
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
	
	public static function Query($q) {
		global $db;
		
		$q = "%" . $q . "%";
		$stmt = $db->prepare("SELECT `pr_ID`, `pr_Name`, `pr_Description`, `pr_Price`, `pr_Image`, `cat_ID` FROM `tbl_products` WHERE `pr_Name` LIKE ?");
		$stmt->bind_param("s", $q);
		
	//Did anuthing come back?
		if(!$stmt->execute()) {
			return false;
		}
		
	//Return things!
		$ret = array();
		$stmt->bind_result($prID, $prName, $prDescription, $prPrice, $prImage, $catID);
		
		while($stmt->fetch()) {
			array_push($ret, new Search($prID, $prName, $prDescription, $prPrice, $prImage, $catID));
		}
		
		return $ret;
	}
}

class SearchView extends View
{	
	protected $items;
	
	public function fetch()
	{
		$this->items = Search::Query($_GET['q']);
		
		if(!isset($_GET['q']) || !$this->items) {
			header("Location: index.php");
			exit;	
		}
	}

	protected function getData()
	{
		return array(
			'page' => 'search',
		);			
	}
}

class SearchController extends Controller
{

}