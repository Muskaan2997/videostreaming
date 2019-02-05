<?php
   session_start();
   include('config.php');
   if(!isset($_SESSION['user_id']))
   {
         echo '<script>window.location.href="login.php";</script>';
   } else {
       $user_id = $_SESSION['user_id'];
   
        $ses_sql = mysqli_query($conn,"select * from user where id = '$user_id' ");
   
       $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
       
       $login_session = $row['username'];
      // $_SESSION['user_phone'] = $row['phone'];
       $_SESSION['user_email'] = $row['email'];
       $_SESSION['user_epin'] = $row['epin'];
   }
   
   
   
   
?>