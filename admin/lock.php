<?php 
include 'includes/session.php'; 
if(isset($_GET['id']) && strtolower($_GET['id'])!="")
{
	$s = $_GET['s'];
	$query2 = mysqli_query($con,"update user set status = '$s' where id='".$_GET['id']."'");
	     header('location:students.php');
}
else
{
	header('location:students.php');
}	
?>