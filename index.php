<?php //MVC design inspired by http://www.sitepoint.com/the-mvc-pattern-and-php-2/
	
	require_once("DB.php");
	include_once("ChromePHP.php");
	//Allows for error logging in the javascript console in Chrome
	//Use: chromephp::log(OUTPUT)
	
	if (session_status() == PHP_SESSION_NONE)
		session_start();
	
	$pages = array(
		'login',
		'category',
		'product',
		'search',
		'cart',
		'account',
		'admin'
		);
$_SESSION['authenticated'] = true;
$_SESSION['uname'] = "sudo";
$_SESSION['role'] = "administrator";
	if (@!$_SESSION['authenticated']) $page = 'login';	
	else if (isset($_GET['page'])) $page = $_GET['page'];
	else $page = 'category';	
			
	foreach($pages as $p)
	{
		if ($page == $p)
		{
			require_once('Model.php');
			require_once("modules/" . ucfirst($p) . "Module.php");			
			
			//Determine class names to create based on page name
			//i.e. LoginModel, LoginView, LoginController expected here
			$mClass = ucfirst($p) . "Model";
			$cClass = ucfirst($p) . "Controller";								
			
			$model = new $mClass();			
			$controller = new $cClass($model);
			
			if (isset($_GET['action']) && !empty($_GET['action']))
				//Call the function with the name of the string stored in $_GET['action']
				if (method_exists($controller, $_GET['action']))
					 $controller->{$_GET['action']}();
				//Isn't scripting great?		

			$vClass = ucfirst($p) . "View";	
			$view = new $vClass($model);
			echo $view->output();
		
			return;
		}
	}
	echo "Error -- Page not found";	