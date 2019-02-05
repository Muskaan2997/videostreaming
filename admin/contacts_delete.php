<?php 
include 'includes/session.php'; 
if(isset($_GET['id']) && strtolower($_GET['id'])!="")
    {
	   $query2 = mysqli_query($con,"delete from contact_us where id='".$_GET['id']."'");
	   echo'<script>window.location="contacts.php"</script>';
    }
    else
    {
	    echo'<script>window.location="contacts.php"</script>';
}	
?>