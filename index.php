<?php include('session.php'); ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | Home :: W3layouts</title>
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
					<div class="sidebar-box">
						<h2>Album-Name</h2>
						<a href="#"><img src="images/allbum.jpg" title="image-name" /></a>
						<h3>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.</h3>
						<div class="rate">
							<b style="width:100%"> </b> 
							<a href="#">Rate 1/5</a>
							<a href="#">Rate 2/5</a>
							<a href="#">Rate 3/5</a>
							<a href="#">Rate 4/5</a>
							<a href="#">Rate 5/5</a>
							<div class="clear"> </div>
						</div>
						<input type="button" value="Rate it" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut labore et dolore magna aliqua.</p>
					</div>
					<div class="clear"> </div>
					<div class="type-videos">
						<h3>Labels</h3>
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
			<div class="right-content" style="padding-bottom: 95px;">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Collections of videos</h3>
					</div>
					<div class="right-content-heading-right">
						
					</div>
					<div class="clear"> </div>
				</div>
				<div class="content-grids">
				    <?php
				        $query = mysqli_query($conn,"select * from videos order by datetime");
										while($row = mysqli_fetch_assoc($query))
										{
				    
				    ?>
					<div class="content-grid">
						<a href="singlepage.php">	<iframe width="250" height="150" src="https://www.youtube.com/embed/<?php echo $row['vid']; ?>" frameborder="0" allowfullscreen></iframe></a>
						<h3><?php echo $row['name']; ?></h3>
						<a class="button" href="singlepage.php?id=<?php echo $row['id']; ?>">Watch now</a>
					</div><?php } ?>
					
					<div class="clear"> </div>
					<!---start-pagenation----->
					<div class="pagenation">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-pagenation----->
					
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

