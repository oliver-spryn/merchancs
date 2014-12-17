<?php
require_once('View.php');
require_once('Controller.php');


class AdminModel extends Model
{

}

class AdminItem
{
	public $image;
	public $name;
	public $description;
	public $pageURL;
	public $price;
    public $category;
    
	public function __construct($name, $desc, $price, $image, $cat)//do I need $URL?
	{
		$this->image = $image;
		$this->name = $name;
		$this->description = $desc;
		//$this->pageURL = $url;
		$this->price = $price;
        $this->category = $cat;
	}
}

class AdminView extends View
{	
    public $adminItems;
	protected function getData()
	{
		return array(
			'page' => 'admin',
		);			
	}
    
    public function fetchAdminData()
	{
		//global $db;
        $host = 'localhost';
		$database = 'merchancs';
		$dbuser = 'root';
		$dbpass = '';
		
		$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
        
        $this->adminItems = array();
       
        $allProducts = $db->query("SELECT * FROM `tbl_products`");
        
        $sizeOfTable = $allProducts->num_rows;
        
        
        
        if($allProducts->num_rows > 0) 
        {
			while($row = $allProducts->fetch_assoc()) 
            {
				$this->adminItems[] = new AdminItem($row['pr_Name'], $row['pr_Description'], $row['pr_Price'], $row['pr_Image'],$row['cat_ID']);
			}
		}
	}
}

class AdminController extends Controller
{

}