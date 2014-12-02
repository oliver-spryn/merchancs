<?php
session_start();
require_once("../DB.php");
global $db;

if(isset($_SESSION['uname'])) {
	$uname = $_SESSION['uname'];
	$db->query("UPDATE tbl_cart LEFT JOIN tbl_users ON tbl_users.usr_ID = tbl_cart.usr_ID SET ct_Quantity = ct_Quantity + 1 WHERE usr_UName= '" . $uname . "'");
}
?>