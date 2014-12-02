<?php
//Connect to the the database
	$host = getenv("MERCHANCS_HOST") or die("The environment variable MERCHANCS_HOST must contain the MySQL host.");
	$database = getenv("MERCHANCS_DB") or die("The environment variable MERCHANCS_DB must contain the name of the database.");
	$dbuser = getenv("MERCHANCS_DB_USER") or die("The environment variable MERCHANCS_DB_USER must contain the user name to the database.");
	$dbpass = getenv('MERCHANCS_DB_PASS') or die("The environment variable MERCHANCS_DB_PASS must contain the password to the database.");
	
	$db = new MySQLi($host, $dbuser, trim($dbpass), $database);
	
//Did the connection succeed?
	if($db->connect_errno) {
		echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		exit;
	}
?>