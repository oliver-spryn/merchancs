<?php
session_start();
require_once("../DB.php");
global $db;

if(isset($_SESSION['uname']) && isset($_GET['theme'])) {
	$uname = $_SESSION['uname'];
	$theme = $_GET['theme'];
	$db->query("UPDATE tbl_users SET usr_Theme = '" . $theme . "' WHERE usr_UName= '" . $uname . "'");
}
?>