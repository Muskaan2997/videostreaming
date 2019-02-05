<?php
session_start();
include("config.php");
$err = $msg ='';
$username = $password = $email = $address =  $number = $image= '';
/*if(isset($_POST["submit"]))
{
    $email=$_POST["email"];$sql = "SELECT * from user where email='".$email."'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) < 0)
	{
        $username=$_POST["name"];
    	$password=$_POST["password"];
    	$number=$_POST["number"];
    	$address=$_POST["address"];
    	$image=$_FILES['image']['name'];
	    
	    $query="insert into user (username, password, email, mobile, address, image, status, date) values('$username', '$password', '$email', '$number', '$address', '$image','0',now())";	   
	    if(mysqli_query($conn,$query)==TRUE){
	        echo '<script>window.location.href="index.php";</script>';
	        $msg="Data Added";
	    }else{
		    $err="Error ".mysqli_error($conn);				 
	    }
	}		
}*/
?>
<html>
  <head>
	<?php include'include/head.php'; ?>
 
  <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script>
    $( document ).ready(function() {
        $("#SignUp").click(function(){
          var phone = $("#inputPhone").val();
            $.ajax({
                type: 'POST',
                url: 'processotp.php',
                data: { phone: phone },
                success: function(data)
                {
                    console.log(data);
                }
            });
        });
    });
</script>
<script>
    $( document ).ready(function() {
         $("#EnterOTP").click(function(){
          var otp = $("#inputOtP").val();
          var phone = $("#inputPhone").val();
          var email = $("#inputEmail").val();
          var username = $("#inputName").val();
          var password = $("#inputPassword").val();
          var address = $("#inputAddress").val();
            $.ajax({
                type: 'POST',
                url: 'checkotp.php',
                data: { otp: otp,  phone: phone, email: email, username:username, password:password, address:address },
                success: function(data)
                { 
                    console.log(data);
                    var trimStr = $.trim(data);
                    if(trimStr == 'exist'){
                        alert('Please change your email. Email already exist.');
                    } 
                    if(trimStr == 'error'){
                        alert('Your otp is wrong');
                    } 
                    if(trimStr == 'true') {
                        location.href = "plan.php";
                    }
                    if(trimStr == 'problem') {
                        alert('Please check your values again.');
                    }
                }
            });
        });
    });
</script>	

<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2> Signup</h2>
   
   </div>
    <!--<form id="Login" action="" method="POST" enctype="multipart/form-data">-->
		<div class="form-group">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Your Name" required="required">
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required="required">
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="required">
        </div>
		
		 <div class="form-group">
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" required="required">
        </div>
		<div class="form-group">
            <input type="text" name="number" class="form-control" id="inputPhone" placeholder="Mobile no." required="required">
        </div>
		 <button data-toggle="modal" data-target="#myModal" class="btn btn-primary" id="SignUp">Signup</button>
        
			<p style="margin-top: 10px;">Have account? <a href="login.php">Login</a> here</p>
			
   <!-- </form>--->
    </div>

</div></div></div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter OTP</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="OTP" action="" method="POST">
              <div class="form-group">
                <input type="text" name="otp" class="form-control" id="inputOtP" placeholder="OTP" required="required">
            </div>
            <button type="button"  class="btn btn-primary" id="EnterOTP">Enter</button>
          </form>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>--->
      </div>
      
    </div>
</div>

</body>
</html>
