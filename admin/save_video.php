<?php 
include 'includes/session.php'; 
$eerr="";
if(isset($_POST['save_test']))
{
	if (empty($_POST['title']) || empty($_POST['link'])) 
	{
		echo 'All Fieds Required!';		
	}
	else
	{
		$title = $_POST['title'];
		$title = stripslashes($title);
		$title = mysqli_real_escape_string($con,$title);
		
			$detail = $_POST['detail'];
		$detail = stripslashes($detail);
		$detail = mysqli_real_escape_string($con,$detail);
		
			$author = $_POST['author'];
		$author = stripslashes($title);
		$author = mysqli_real_escape_string($con,$author);
		
		$link = $_POST['link'];
		$link = stripslashes($link);
		$link = mysqli_real_escape_string($con,$link);
		
		$query = mysqli_query($con,"insert into videos(name, vid, deatil, author, datetime) values('$title', '$link', '$detail', '$author', '".date('Y-m-d H:i:s', time())."')");
		if($query)
			echo '<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>';
		else
			echo mysqli_error($con);	
	}
}
?>