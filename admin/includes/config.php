<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');

   $servername="localhost";
	$username="root";
	$password="";
	$dbname="vstreaming";
	$con='';
	
	$con = mysqli_connect($servername, $username, $password,$dbname);
	
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

