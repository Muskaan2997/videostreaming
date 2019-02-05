<?php include 'includes/session.php';  ?>
<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Videos </title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app">
			<?php include'left-bar.php'; ?>
			<div class="app-content">
				<?php include'header.php'; ?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Videos </h1>
								 
								</div>
								<ol class="breadcrumb">
									
									<li class="active">
										<span>Videos </span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12 space20">
											<a href="new_video.php" class="btn btn-primary add-new">
												Add New <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												
												<th>Name</th>
												<th>Video</th>
												<th>Description</th>
												<th>Author</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=0;
										$query = mysqli_query($con,"select * from videos order by datetime");
										while($row = mysqli_fetch_assoc($query))
										{
											$i++;
											
										?>
											<tr>
												
												<td style=" width: 480px;"><?php echo $row['name']; ?></td>
												<td>
												<iframe width="200" height="150" src="https://www.youtube.com/embed/<?php echo $row['vid']; ?>" frameborder="0" allowfullscreen></iframe>
												</td>									<td style=" width: 480px;"><?php echo $row['detail']; ?></td>
												<td>
												    <td style=" width: 480px;"><?php echo $row['author']; ?></td>
												<td>				
												<td>
												<div class="btn-group">
										<a class="btn btn-red dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="fa fa-cog"></i> <span class="caret"></span>
										</a>
										<ul role="menu" class="dropdown-menu dropdown-dark">
											<li> <a href="video_delete.php?id=<?php echo $row['id']; ?>" class="cm-post cm-confirm" data-ca-confirm-text="This will delete paper. Are you sure?">Delete</a></li>
										</ul>
									</div>
									
												
												</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
<div class="modal fade" id="viewtemp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
  <div class="modal-content" style="background: #fff">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 class="smaller lighter blue no-margin">Test Details </h3>
	</div>

	<div class="modal-body load1" >
    

    
	</div>

	<div class="modal-footer">
	<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
	<i class="ace-icon fa fa-times"></i>
	Close
	</button>
    </div>
   </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
								</div>
							</div>
						</div>
						<!-- end: DYNAMIC TABLE -->
					</div>
				</div>
			</div>
     	<?php include'footer.php'; ?>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/DataTables/jquery.dataTables.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/table-data.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
<script>
$('.testdetails').click(function(){
 var test = $(this).attr('data-val');
 $('#viewtemp').find('.modal-body').addClass('csspinner').html('<p class="text-center text-large">Loading...</p>');
		$('#viewtemp').find('.modal-body').load('test_details.php',{test:test}, function(){
			$('#viewtemp').find('.modal-body').removeClass('csspinner');
		});
	
});

</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
