<?php 
include 'includes/config.php';
$unn='';
if(isset($_SESSION['login_user']))
{
	$unn=$_SESSION['login_user'];
}
$disply= mysqli_query($con,"select * from  admin_login where admin_name='$unn'");
if(mysqli_num_rows($disply)>0)
{
	$row= mysqli_fetch_assoc($disply);
	$_SESSION['admin_name']=$row['admin_name'];
    $_SESSION['last_login']=$row['last_login'];
    $_SESSION['admin_id']=$row['admin_id'];
	$_SESSION['admin_pic']=$row['picture'];
	$_SESSION['admin_email']=$row['admin_email'];
	$_SESSION['created_on']=$row['created_on'];
	$_SESSION['locked']='0';
    header("location: index.php"); 
}
$message="";
if(isset($_POST['logmein']))
{
if (empty($_POST['admin_username']) || empty($_POST['admin_password'])) {
$message = '<div class="alert ng-scope ng-isolate-scope alert-danger alert-dismissible" ng-class="[\'alert-\' + (type || \'warning\'), closeable ? \'alert-dismissible\' : null]" role="alert" ng-repeat="alert in alerts" type="danger" close="closeAlert($index)">
    <button ng-show="closeable" type="button" class="close" ng-click="close({$event: $event})">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <div ng-transclude=""><span class="ng-binding ng-scope">
									Wrong username and password!
	      </span></div>
</div>';
}
else
{
$username=$_POST['admin_username'];
$password=$_POST['admin_password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
$password=md5($password);
$query = mysqli_query($con,"select * from admin_login where password='$password' AND admin_name='$username'");
$rows = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);
if ($rows == 1) {
	if($row['password']==$password)
	{
       $_SESSION['login_user']=$username;
       $_SESSION['last_login']=$row['last_login'];
       $disply= mysqli_query($con,"update admin_login set last_login='".date('Y-m-d H:i:s', time())."' where admin_name='$username'");
       header("location: index.php"); 
	}
	else
	{
		$message = '<div class="alert ng-scope ng-isolate-scope alert-danger alert-dismissible" ng-class="[\'alert-\' + (type || \'warning\'), closeable ? \'alert-dismissible\' : null]" role="alert" ng-repeat="alert in alerts" type="danger" close="closeAlert($index)">
    <button ng-show="closeable" type="button" class="close" ng-click="close({$event: $event})">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <div ng-transclude=""><span class="ng-binding ng-scope">
									Wrong username and password!
	      </span></div>
</div>';
	}

} else {
$message = '<div class="alert ng-scope ng-isolate-scope alert-danger alert-dismissible" ng-class="[\'alert-\' + (type || \'warning\'), closeable ? \'alert-dismissible\' : null]" role="alert" ng-repeat="alert in alerts" type="danger" close="closeAlert($index)">
    <button ng-show="closeable" type="button" class="close" ng-click="close({$event: $event})">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <div ng-transclude=""><span class="ng-binding ng-scope">
									 Wrong username and password!
	     </span></div>
</div>';
}
}
}
?>