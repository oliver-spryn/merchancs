<?php

require_once('View.php');
require_once('Controller.php');

class ProductModel extends Model
{

}

class ProductView extends View
{
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