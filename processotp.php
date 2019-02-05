<?php
session_start();
include("config.php");
$mobileNumber = $_POST['phone'];

$rndno=rand(1000, 9999);

$_SESSION['admin_otp'] = $rndno;

$message = urlencode("Your OTP number is.".$rndno);
$route = "route=4";
$postData = array(
'mobiles' => $mobileNumber,
'message' => $message,
'sender' => $senderId,
'route' => $route
);
$_SESSION['user_otp'] = $rndno;
$url = "http://alotsolutions.in/API/WebSMS/Http/v1.0a/index.php?username=demosoftware&password=Admin!2332!&sender=TSTMSG&to=$mobileNumber&message=$message&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=16-11-2018T04:45:04";
echo $url.'<br>';
$res = file_get_contents($url);
echo $rndno;


?>