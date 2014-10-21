<?php
require('helpers.php');

switch($_GET['type'])
{
	case "echoItems": echoItems($_GET['category']);
}
?>