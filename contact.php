<?php include('session.php'); 

if(isset($_POST["contact"]))
{
	
	$err = $msg ='';
	$name='';
	$email='';
	$usersubject='';
	$usermsg='';
	
	$name=$_POST['user_name'];
		$email=$_POST['user_email'];
		$usersubject=$_POST['user_phone'];
		$usermsg=$_POST['email_message'];
	
		$insert=mysqli_query($conn,"insert into contact_us(name, email, phone, subject) values('$name','$email','$usersubject','$usermsg')"); 
		if(!$insert)
		{
			$err = mysqli_error($conn);
		
		}
		else
		{
			$msg = 'Send successfully!!';
			echo'<script>alert("Send successfully!!")</script>';
		}
	
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
	<head>
		<title>Videos Streaming</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//vdo.ai/core/w3layouts/vdo.ai.js");
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="account.php">My Account</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<!---728x90--->

			<!--<div class="left-sidebar">
				<div class="sidebar-boxs">
					<div class="clear"> </div>
					<div class="type-videos">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Lorem ipsum dolor</a></li>
						</ul>
					</div>
				</div>
			</div>---> 
			<div class="right-content" style="padding-bottom: 275px;">
				<!--<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Categories of videos</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>-->
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
			    	 		    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86108930502!2d76.69348902262958!3d30.735210198445124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1542364607577" width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>-->
			    	 		    
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86108930502!2d76.69348902262958!3d30.735210198445124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1542364607577"></iframe><br><small><a href="src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86108930502!2d76.69348902262958!3d30.735210198445124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1542364607577" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
      			    <?php
      			    $a="SELECT * FROM contactdetails";
                    $result=mysqli_query($conn, $a);
                    $row=mysqli_fetch_array($result); 
                    ?>
				     	<h3>Company Information :</h3>
						    	<p><?=$row['address']?></p>
				   		<p>Phone:<?=$row['phone']?></p>
				   		<p>Fax: <?=$row['fax']?></p>
				 	 	<p>Email: <span><a href="mailto:@example.com"><?=$row['email']?></a></span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
				  	
				  	<form method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 padder_left">
                                    <div class="form-group">
                                        <input type="text"  name="user_name"  class="form-control require" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 padder_right">
                                    <div class="form-group">
                                        <input type="text"  name="user_email" class="form-control require" placeholder="Email" data-valid="email" data-error="Email should be valid." required="required">
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 col-md-12 padder_left padder_right">
                                    <div class="form-group">
                                        <input type="text"  name="user_phone" class="form-control" placeholder="Contact" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 padder_left padder_right">
                                    <div class="form-group">
                                        <textarea name="email_message" class="form-control" placeholder="Message" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="response"></div>
                                <div class="col-lg-12 col-md-12 padder_left padder_right">
                                  <input type="submit"  name="contact" class="cy_button" value="Send" />
                                    
                                </div>
                            </div>
                        </form>
					    

				    </div>
  				</div>				
			  </div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---728x90--->

		<!---start-copy-right---->
		<div class="copy-right">
			<p> &copy; 2018 Videos Streaming. All rights reserved  <a href="index.php" style="color: #886f6f;">vstreaming</a></p>
		</div>
		<!---End-copy-right---->
		<!---728x90--->

		<!---End-wrap---->
	</body>
</html>

