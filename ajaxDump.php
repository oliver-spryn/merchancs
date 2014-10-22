<?php
require('includes/helpers.php');

switch($_GET['type'])
{
	case "echoItems": echoItems($_GET['category']);
}
?>