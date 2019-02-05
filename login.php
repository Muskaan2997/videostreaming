<?php

   session_start();
   include("config.php");
   $error="";
   $success = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";
	  
      $result = mysqli_query($conn,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $username= $row['username'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
      if($count == 1) 
	  {
		   $_SESSION['user_name'] = $username;
		   $_SESSION['user_id'] = $row['id'];
		  echo '<script>window.location.href="index.php";</script>';
        
        
	  }
	 else 
	 {
	 	$error_message = "Email not exists!";
	
	}
  }
  
?>
<html>
  <head>
	<?php include'include/head.php'; ?>
  
  <link href="css/login.css" rel="stylesheet" id="bootstrap-css">


<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2> Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action=""  method="POST" >
		
        <div class="form-group">


            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required="required">

        </div>
		

        <div class="form-group">

            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="required">

        </div>
        <div class="forgot">
        <input type="checkbox" ><span>Keep me signed in</span>
		<!--<a href="reset.html">Forgot password?</a>-->
</div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
			<p style="margin-top: 10px;">Not Registered? <a href="signup.php">Signup</a> here</p>
			
    </form>
    </div>

</div></div></div>


</body>
</html>
