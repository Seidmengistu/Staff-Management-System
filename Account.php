<?php
$se=$_SESSION['user'];
print_r($se);
die();
	$conn = new mysqli('localhost', 'root', '', 'sms') or die(mysqli_error());
    $qadmin = $conn->query("SELECT * FROM `Admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$fadmin = $qadmin->fetch_array();
	$name = $fadmin['UserName'];




    // require_once 'connect.php';
	// $qadmin = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
	// $fadmin = $qadmin->fetch_array();
	// $name = $fadmin['firstname']." ".$fadmin['lastname'];