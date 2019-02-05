<?php
session_start();
   include("config.php");
$otp = $_POST['otp'];

if($otp == $_SESSION['user_otp']){
   
    $email=$_POST["email"];
    $sql = "SELECT * from user where email='".$email."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        echo 'exist';
    } else {
       $username=$_POST["username"];
    	$password=$_POST["password"];
    	$number=$_POST["phone"];
    	$address=$_POST["address"];

        $query="insert into user (username, password, email, mobile, address,  status, date) values('$username', '$password', '$email', '$number', '$address', '0',now())";
        if(mysqli_query($conn,$query)==TRUE){
            $_SESSION['user_id'] = mysqli_insert_id($conn);
            $myid=mysqli_insert_id($conn);
            echo 'true';
        }else{
    	    echo 'problem';			 
        }
    }
} else {
    echo 'error';
}
?>