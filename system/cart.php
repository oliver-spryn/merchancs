<?php
session_start();
require_once("../DB.php");
global $db;

if(isset($_SESSION['uname'])) {
	$uname = $_SESSION['uname'];
	$prId = $_SESSION['viewedID'];
	$db->query("UPDATE tbl_cart LEFT JOIN tbl_users ON tbl_users.usr_ID = tbl_cart.usr_ID SET tbl_cart.ct_Quantity = tbl_cart.ct_Quantity + 1 WHERE tbl_users.usr_UName= '" . $uname . "' AND tbl_cart.pr_Id = '".$prId."'");
}
?>