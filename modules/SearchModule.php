<?php
require_once('View.php');
require_once('Controller.php');

class SearchModel extends Model
{

}

class SearchView extends View
{	
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