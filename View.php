<?php

class View
{
	protected $model;
	
	//The category list in the header, used in all logged-in views
	protected $catList;
	
	//Override in children to set variables as needed
	protected function getData(){return array();}
		
	public function __construct(&$model)
	{
		$this->model = $model;
		
		//Construct the standard header category list
		$this->catList = "<ul>";
		foreach($model->xml->children() as $cat)
		{
			$name = $cat['name'];
			$this->catList .= "<li><a class='text-inherit category' href='index.php?action=categoryClicked&category=$name'>$name</a></li>";
		}
		$this->catList .= "</ul>";	
	}
	
	protected function getBodyHTML($page)
	{
		ob_start();		
		include("views/{$page}.phtml");
		$output = ob_get_contents();
		ob_end_clean();			
		return $output;
	}
		
	public function output()
	{	
		$data = $this->getData();	
		extract($data);		
		$body = $this->getBodyHTML($data['page']);			
		require("templates/main.phtml");
	}
}