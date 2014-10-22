<?php 
require('includes/helpers.php'); 
echoHead();
?>

<!-- Add My Style Links Here -->
<!-- Exclude main.css from admin page -->

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:400,300%7CJulius+Sans+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="styles/login.css" rel="stylesheet">

<?php echoScripts(); ?>
<!-- Add My Scripts Here -->
<script src="scripts/login.js"></script>

</head>
<body class="electric">
<header id="main-header">
    <a id="logo" class="navbar-brand" href="#"><img alt="MerchanCS Logo" class="logo" src="images/logo.jpg"></a>
</header>
<form  name="loginForm" action="" onsubmit="return validateForm()" method="">
<h2>MerchanCS Login Credentials</h2>


<!--
<ul class="nav navbar-nav navbar-right">
<li><a class="home" href="#"><i class="fa fa-home text-inherit"></i> Home</a></li>
<li><a class="search" href="#"><i class="fa fa-search text-inherit"></i> Search</a></li>
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
-->
	
<div class="input-group username">
<input name="username" class="form-control" type="text" placeholder="Username">
</div>
    
<div class="input-group password">
<input name="password" class="form-control" type="text" placeholder="Password">
<span class="input-group-btn"></span>  
</div>
    
 <input type="submit" name="loginButton" value="Submit">   

<!--<button id = "submitButton" class="btn btn-default" type="button" onclick="window.location = 'login2.html';">Submit</button>-->
    
    
<li><a class="text-inherit" href="#">Forgot Password</a></li>
</form>


</body>
</html>