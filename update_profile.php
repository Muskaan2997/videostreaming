<?php 
include 'session.php'; 
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
$id=$_SESSION['user_id'];
$sql1 = "SELECT * from user where id='$id'";
$result1 = mysqli_query($conn,$sql1);
$rowc1 = mysqli_fetch_assoc($result1);	
if(mysqli_num_rows($result1)<=0)
  	echo'<script>window.location="account.php"</script>';	
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


$password=$_POST['password'];

$name = stripslashes($name);
$username = stripslashes($username);

$password = stripslashes($password);

$name = mysqli_real_escape_string($conn,$name);
$username = mysqli_real_escape_string($conn,$username);
 
$password = mysqli_real_escape_string($conn,$password);


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
		  $_SESSION['user_name']=$username;
	      $query = mysqli_query($conn,"update user set username='$name',email='$username',image='$picture', password='$password' where id='".$_POST['admin_ids']."'");
		  echo '<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>';	 
	   }
}
}
?>