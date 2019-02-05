<?php 
include 'includes/session.php'; 
$eerr="";
function checkimg($pic)
{
	 if (file_exists("assets/images/" . $pic)) {
               return false;
              }
			  else 
			  {
				  return true;
			  }
}
$up=1;
$admin_id=$_SESSION['admin_id'];
$sql1 = "SELECT * from admin_login where admin_id='$admin_id'";
$result1 = mysqli_query($con,$sql1);
$rowc1 = mysqli_fetch_assoc($result1);	
if(mysqli_num_rows($result1)<=0)
  header('Location:settings_profile.php');	
if(isset($_POST['update_admin']))
{
if (empty($_POST['name']) || empty($_POST['username']) ) 
{
echo 'All Fieds Required!';		
}
else
{
$name=$_POST['name'];
$username=$_POST['username'];

$name = stripslashes($name);
$username = stripslashes($username);

$name = mysqli_real_escape_string($con,$name);
$username = mysqli_real_escape_string($con,$username);


if(empty($_FILES['pic']['name']))
{
	$picture=$_POST['oldpic'];
}
else
{
	$validextensions = array("jpeg", "jpg", "png", "JPEG", "JPG", "PNG");
    $temporary = explode(".", $_FILES["pic"]["name"]);
    $file_extension = end($temporary);
     if (($_FILES["pic"]["size"] < 1000000) && in_array($file_extension, $validextensions)) {
     if ($_FILES["pic"]["error"] > 0)
     {
        echo $_FILES["pic"]["error"]; $up=0;
     }
      else
      {     
          $picname='IMG_'.date('dmY',time())."_".date('His',time());
          $picture= $picname.".". $file_extension;
		  $i=0;
          while(checkimg($picture)!=true)
		  {
			  $i++;
			  $picture=$picname."_(".$i.").".$file_extension;
		  } 
                $sourcePath = $_FILES['pic']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "assets/images/".$picture; // Target path where file is to be stored
                if(move_uploaded_file($sourcePath,$targetPath) )
                {
					if($_POST['oldpic']!='')
	              unlink( "assets/images/".$_POST['oldpic']);
                }	
				else
				{
					 echo  'Error while uploading your image try again later!';
					 $up=0;
				}
       }  
    }
	else
	{
		 echo 'Only jpg, jpeg and png file allowed!';
	}
}
if($up==1)
	   {
		   $password=md5($password);
		  $_SESSION['login_user']=$username;
	      $query = mysqli_query($con,"update admin_login set admin_name='$name',admin_email='$username',picture='$picture' where admin_id='".$_POST['admin_ids']."'");
		  echo '<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>';	 
	   }
}
}
?>