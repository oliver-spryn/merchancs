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
	public function __construct($image, $name, $desc, $url, $price)
	{
		$this->image = $image;
		$this->name = $name;
		$this->description = $desc;
		$this->pageURL = $url;
		$this->price = $price;
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
		//DB fetch of cart data
		$this->cartItems = array();
		$this->cartItems[] = new CartItem("images/floppy-disks.jpg","Floppy Disks","these are floppy disks.","#","$232.99");
	}
}

class CartController extends Controller
{

}