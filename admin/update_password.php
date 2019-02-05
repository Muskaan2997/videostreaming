<?php 
include 'includes/session.php'; 
$eerr="";

$admin_id=$_SESSION['admin_id'];
$sql1 = "SELECT * from admin_login where admin_id='$admin_id'";
$result1 = mysqli_query($con,$sql1);
$rowc1 = mysqli_fetch_assoc($result1);	
if(mysqli_num_rows($result1)<=0)
	header('Location:settings_profile.php');	
if(isset($_POST['update_admin']))
{
	if (empty($_POST['password'])) 
	{
		echo 'All Fieds Required!';		
	}
	else
	{

		$password=$_POST['password'];
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($con,$password);

		$password=md5($password);
		$_SESSION['password']=$password;
	    $query = mysqli_query($con,"update admin_login set password='$password' where admin_id='".$admin_id."'");
		echo '<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>';	 
	}
}
?>