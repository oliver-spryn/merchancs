<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MerchanCS Template</title>

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:400,300%7CJulius+Sans+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="styles/main.css" rel="stylesheet">
<link href="styles/details.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/index.js"></script>

<?php require('helpers.php'); ?>
</head>

<body class="electric">
<header id="main-header">
<nav class="navbar navbar-default" role="navigation">
<a class="navbar-brand" href="index.php"><img alt="MerchanCS Logo" class="logo" src="images/logo.jpg"></a>

<ul class="nav navbar-nav navbar-right">
<li><a class="home" href="index.php"><i class="fa fa-home text-inherit"></i> Home</a></li>
<li><a class="search" href="search.php"><i class="fa fa-search text-inherit"></i> Search</a></li>
<li><a class="browse" href="#"><i class="fa fa-bars text-inherit"></i> Browse</a></li>

<li class="dropdown themes">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="background-inherit demo-disk"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a data-class="apple" href="#"><span class="apple-instance demo-disk"></span> Apple</a></li>
<li><a class="active" data-class="electric" href="#"><span class="electric-instance demo-disk"></span> Electric</a></li>
<li><a data-class="lime" href="#"><span class="lime-instance demo-disk"></span> Lime</a></li>
<li><a data-class="oak" href="#"><span class="oak-instance demo-disk"></span> Oak</a></li>
</ul>
</li>
</ul>

<div class="input-group search">
<input class="form-control" type="text" placeholder="Search">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go</button>
</span>
</div>
	
<ul class="personal">
<li class="account dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Walter J. Evancost</a>

<ul class="dropdown-menu dropdown-menu-right" role="menu">
<li>
<div>
<h2 class="background-inherit">W</h2>
<h3>Walter J. Evancost</h3>
<p>cdboatright@gcc.edu</p>
<a href="#" class="btn btn-default" role="button">Sign Out</a>
</div>
</li>
</ul>
</li>

<li class="cart"><a href="cart.php"><i class="fa fa-shopping-cart"><span class="background-inherit badge pull-right">1</span></i></a></li>
</ul>
</nav>
</header>

<aside id="categories">
<h2>MerchanCS</h2>
	
<nav>
<h2>Shopping Categories</h2>


<?php 	
	if (isset($_GET['category']) && !empty($_GET['category']))
		echoCategoryList($_GET['category']); 
	else echoCategoryList("New and Featured");
?>

</nav>
</aside>