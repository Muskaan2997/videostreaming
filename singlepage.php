<?php include('session.php');
$id=  $_GET['id'];
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | singlepage :: W3layouts</title>
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

			<!---<div class="left-sidebar">
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
			</div>---->
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Categories of videos</h3>
					</div>
					<div class="right-content-heading-right">
						
					</div>
					<div class="clear"> </div>
				</div>
				<div class="inner-page">
				     <?php
				        $query = mysqli_query($conn,"select * from videos where id='$id'");
							$row = mysqli_fetch_assoc($query);
										
				    
				    ?>
				<div class="title">
					<h3><?php echo $row['name']; ?> </h3>
					<ul>
						<li><h4>By:</h4></li>
						<li><?php echo $row['author']; ?></li>
						<li><img src="images/images.png" title="subscribe"style=" height: 92px;width: 122px;"><a href="#"></a>subscribe</a></li>
					</ul>
				</div>
				<div class="video-inner">
					
					
					<iframe src="https://www.youtube.com/embed/<?php echo $row['vid']; ?>" width="100%" height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				</div>
				<!---728x90--->

				<div class="clear"> </div>
				<div class="video-details">
					<ul>
						<li><p>Uploaded on <a href="#"><?php echo $row['datetime']; ?></a> by <a href="#"><?php echo $row['author']; ?></a></p></li>
						<li><span><p><?php echo $row['detail']; ?></p></span></li>
					</ul>
				</div>
				<div class="clear"> </div>
				
				<div class="clear"> </div>
			
		  	
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
		<!---End-wrap---->
	</body>
</html>

