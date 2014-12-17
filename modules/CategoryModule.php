<?php
require_once('View.php');
require_once('Controller.php');
require_once("DB.php");

class CategoryModel extends Model
{
	public $cat;
	public $products;
	
	public function __construct()
	{
		parent::__construct();
		$this->setCategory("New and Featured");
	}
	
	public function setCategory($catName)
	{	
		$this->cat = $this->DB->query(
			"SELECT *
			FROM tbl_categories
			WHERE cat_name = '$catName'")->fetch_array(MYSQLI_ASSOC);
			
		$ID = $this->cat['cat_ID'];
			
		$this->products = $this->DB->query(
			"SELECT * 
			FROM tbl_products
			WHERE cat_ID = $ID")->fetch_all(MYSQLI_ASSOC);
	}
}

class CategoryView extends View
{
	protected $items;
	
	public function __construct(&$model)
	{
		parent::__construct($model);
		$this->items = $this->constructItemHTML();
	}
	
	protected function constructItemHTML()
	{	
		//Generate the absolute URL to the assets
		$URL = dirname($_SERVER['SCRIPT_NAME']) . "/";
		
		$category = $this->model->cat['cat_Name'];
		$sub = $this->model->cat['cat_Description'];	
		$ret = "<h2>$category<br/><small>$sub</small></h2>";
		foreach($this->model->products as $item)
		{	
			$name = $item['pr_Name']; 
			$img = $item['pr_Image']; 
			$price = '$'.$item['pr_Price'];	
			$id = $item["pr_ID"];
			
			$ret .= "						
				<div class='col-sm-3'>
					<a href='index.php?page=product&id=$id'>
						<img alt='$name'
							class='img-responsive thumbnail' 
							src='$URL/images/$img'/>
					</a>
					<h6>$name <br/><small>From $price</small></h6>
				</div>";				
		}
		$ret .= "</div></div>";
		return $ret;
	}
	
	protected function getData()
	{
		return array(
			'page' => 'category',
		);			
	}
}

class CategoryController extends Controller
{
	public function categoryClicked()
	{
		$this->model->setCategory($_GET['category']);
	}
}