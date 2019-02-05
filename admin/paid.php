<?php 
include 'includes/session.php'; 
if(isset($_GET['id']) && strtolower($_GET['id'])!="")
{
	$query = mysqli_query($con,"insert into payment(pid, email, status, datetime) values('ADM-".uniqid()."', '".$_GET['id']."', 'Credit', '".date('Y-m-d H:i:s')."')");
				
	$query = mysqli_query($con,"insert into inbox(sender, reciever, message, datetime) values('admin', '".$_GET['id']."', 'You paid for the Complete Study material', '".date('Y-m-d H:i:s')."')");	
	header('location:students.php');
}
else
{
	header('location:students.php');
}	
?>