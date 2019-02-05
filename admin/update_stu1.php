<?php 
include 'includes/session.php';
$eerr="";
$name='';
$email='';
$phone='';
$password='';
$qimage='';

function checkimg($pic)
{
	 if (file_exists("../images/" . $pic)) {
               return false;
              }
			  else 
			  {
				  return true;
			  }
}
$up=1;	
if(isset($_POST['name']))
{
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) 
{
	echo 'All Fieds Required!';		
}
else
{
	$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];


if(isset($_FILES["qimage"]['name']))
{
if ($_FILES["qimage"]['name']!='')
{

	$validextensions = array("jpeg", "jpg", "png", "JPEG", "JPG", "PNG");
    $temporary = explode(".", $_FILES["qimage"]["name"]);
    $file_extension = end($temporary);
     if (in_array($file_extension, $validextensions)) {
     if ($_FILES["qimage"]["error"] > 0)
     {
        echo $_FILES["qimage"]["error"];
		$up=0;
     }
      else
      {     
          $picname='IMG_'.date('dmY',time())."_".date('His',time());
          $qimage= $picname.".". $file_extension;
		  $i=0;
          while(checkimg($qimage)!=true)
		  {
			  $i++;
			  $qimage=$picname."_(".$i.").".$file_extension;
		  } 
                $sourcePath = $_FILES['qimage']['tmp_name']; // Storing source path of the file in a variable
                $targetPath = "../images/".$qimage; // Target path where file is to be stored
                if(move_uploaded_file($sourcePath,$targetPath) )
                {
				 					  
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
}	
else
	$qimage = $_POST['old'];
if($up==1)
{
			$query1 = mysqli_query($con,"select * from user where email='$email' and id <> $id");
			if(mysqli_num_rows($query1)>0)
			{
				echo 'Email already exist!';
			}
            else
			{
				 $query = mysqli_query($con,"update user set username='$name', email='$email', mobile='$phone', password='$password', image='$qimage' where id = $id");
				if($query)
				{
					echo '<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>';
				}
				else
					echo mysqli_error($con)	; 
			}
	      
	   }
}
}
else
	echo 'a';
?>