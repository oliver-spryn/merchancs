<?php

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