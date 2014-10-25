<?php
require_once('View.php');
require_once('Controller.php');

class CategoryModel extends Model
{
	public $category;
	
	public function __construct()
	{
		parent::__construct();
		$this->category = "New and Featured";
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
		$category = $this->model->category;
		foreach($this->model->xml->children() as $cat)
		{		
			
			if ($cat['name'] == $category)
			{				
				$sub = $cat['sub'];
				$ret = "<h2>$category<br/><small>$sub</small></h2>";
				foreach($cat->children() as $item)
				{	
					$name = $item['name']; 
					$img = $item['img']; 
					$price = '$'.$item['price'];
					
					$ret .= "						
						<div class='col-sm-3'>
							<a href='index.php?page=product'>
								<img alt='$name'
									class='img-responsive thumbnail' 
									src='$img'/>
							</a>
							<h6>$name <br/><small>From $price</small></h6>
						</div>";	
				}
			}
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
		$this->model->category = $_GET['category'];
	}
}