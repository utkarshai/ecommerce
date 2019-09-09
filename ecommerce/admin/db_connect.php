<?php 
$con=mysqli_connect('localhost','root','') or die("database connection error");
mysqli_select_db($con,'ecommerce')or die("database selection error ");
?>