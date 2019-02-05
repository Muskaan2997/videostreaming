<?php
session_start();
include 'config.php';
$unn=$_SESSION['login_user'];
$disply= mysqli_query($con,"select * from  admin_login where admin_name='$unn'");
if(mysqli_num_rows($disply)>0)
{

	$row= mysqli_fetch_assoc($disply);

	$_SESSION['admin_name']=$row['admin_name'];
    $_SESSION['admin_id']=$row['admin_id'];
	$_SESSION['admin_pic']=$row['picture'];
	$_SESSION['admin_email']=$row['admin_email'];
	$_SESSION['created_on']=$row['created_on'];
}
else
echo'<script>window.location="login.php"</script>';	
?>