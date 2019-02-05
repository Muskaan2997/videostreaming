<?php 
include 'includes/session.php'; 
if(isset($_GET['id']) && strtolower($_GET['id'])!="")
{
	$query2 = mysqli_query($con,"delete from user where id='".$_GET['id']."'");
	     header('location:students.php');
}
else
{
	header('location:students.php');
}	
?>