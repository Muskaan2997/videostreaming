<?php 
include 'includes/session.php'; 
if(isset($_GET['id']) && strtolower($_GET['id'])!="")
{
	$query2 = mysqli_query($con,"delete from videos where id='".$_GET['id']."'");
	header('location:videos.php');
}
else
{
	header('location:videos.php');
}	
?>