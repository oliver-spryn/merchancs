<?php

function echoHead()
{
echo <<<HEAD
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MerchanCS Template</title>
HEAD;
}

function echoStyles()
{
echo <<<STYLES
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:400,300%7CJulius+Sans+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="styles/main.css" rel="stylesheet">
STYLES;
}

function echoScripts()
{
echo <<<SCRIPTS
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
SCRIPTS;
}

function echoCategoryList()
{
	$xml=simplexml_load_file("items.xml");
	echo "<ul>";
	foreach($xml->children() as $cat)
	{
		$name = $cat['name'];
		echo "<li><a class='text-inherit category' href='#'>$name</a></li>";
	}
	echo "</ul>";
}

function echoItems($category)
{
	$xml=simplexml_load_file("items.xml");
	foreach($xml->children() as $cat)
	{
		if ($cat['name'] == $category)
		{			
			$sub = $cat['sub'];
			echo "<h2>$category<br/><small>$sub</small></h2>";
			foreach($cat->children() as $item)
			{	
				$name = $item['name']; $img = $item['img']; $price = '$'.$item['price'];
				echo <<<ITEMS
					<div class="container-fluid">
					<div class="row">
					<div class="col-sm-3">
						<a href='details.php?$name'>
						<img alt="$name" 
						class="img-responsive thumbnail" 
						src="$img"/>
						</a>
						<h6>$name <br/><small>From $price</small></h6>
					</div>			
ITEMS;
			}
		}
	}
	echo "</div></div>";
}
?>