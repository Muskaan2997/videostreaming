<?php
$page = strtolower(basename($_SERVER['PHP_SELF'])); 
?>
<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li <?php if($page=='index.php') echo 'class="active open"'; ?>>
								<a href="index.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							
							<li <?php if($page=='settings_profile.php') echo 'class="active open"'; ?>>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Profile </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="settings_profile.php">
											<span class="title"> Settings </span>
										</a>
									</li>
									<li>
										<a href="logout.php">
											<span class="title"> Logout</span>
										</a>
									</li>
									
								</ul>
							</li>
							
							<li <?php if($page=='videos.php' || $page=='new_video.php') echo 'class="active open"'; ?>>
								<a href="videos.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-video-camera"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Videos</span>
										</div>
									</div>
								</a>
							</li>
							
							<li <?php if($page=='students.php') echo 'class="active open"'; ?>>
								<a href="students.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Users </span>
										</div>
									</div>
								</a>
							</li>
							<li <?php if($page=='payments.php') echo 'class="active open"'; ?>>
								<a href="payments.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Payment History </span>
										</div>
									</div>
								</a>
							</li>
							
							<li <?php if($page=='contact-details.php') echo 'class="active open"'; ?>>
								<a href="contact-details.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-write"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Contact Details</span>
										</div>
									</div>
								</a>
							</li>
							
							<li>
								<a href="contacts.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-headphone"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Contact Queries </span>
										</div>
									</div>
								</a>
							</li>
							
						</ul>
						
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						<div class="wrapper">
							<a href="logout.php" class="button-o">
								<!--<i class="ti-help"></i>-->
								<span>Logout</span>
							</a>
						</div>
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->