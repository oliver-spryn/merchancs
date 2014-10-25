<?php
require_once('View.php');
require_once('Controller.php');

class CartModel extends Model
{

}

class CartView extends View
{	
	protected function getData()
	{
		return array(
			'page' => 'cart',
		);			
	}
}

class CartController extends Controller
{

}