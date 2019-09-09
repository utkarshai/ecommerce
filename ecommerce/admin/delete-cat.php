<?php
require_once('auth.php');
require_once('db_connect.php');
$cat_id=$_GET['id'];
	$del="delete from categories where cat_id='$cat_id'";
	mysqli_query($con,$del);
header('location:view-categories.php');

?>