<?php include 'includes/session.php';
$admin_id=$_SESSION['admin_id'];
$msg='';
$qry="select * from contactdetails where id='1'";
$rq=mysqli_query($con,$qry);
$rs=mysqli_fetch_assoc($rq);
if(isset($_POST['phone']))
{
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$query = mysqli_query($con,"update contactdetails set phone = '$phone', fax = '$fax', email = '$email', address = '$address' where id='1'");
	if($query)
		$msg='<div class="successHandler alert alert-success">
													<i class="fa fa-ok"></i> Update successful!
												</div>';
	else
		$msg='<div class="errorHandler alert alert-danger">
													<i class="fa fa-times-sign"></i> Some errors. Please try again later.
												</div>';
$qry="select * from contactdetails where id='1'";
$rq=mysqli_query($con,$qry);
$rs=mysqli_fetch_assoc($rq);
}


 ?><!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Contact Details</title>
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
		<link href="vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
		<link href="vendor/sweetalert/ie9.css" rel="stylesheet" media="screen">
		<link href="vendor/toastr/toastr.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-fileinput/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<style>
		#brand_pic-error{
			display:none!important;

		}.col-md-6 .fileinput .thumbnail>img {
           max-height: 130px;
         }
		 .col-md-4 .fileinput .thumbnail>img {
           max-height:80px;
         }
		 .fileinput {
			 text-align:center;
			 }
		</style>
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
									<h1 class="mainTitle">Contact Details</h1>
								  <span class="mainDescription">Contact Details</span>
								</div>
								<ol class="breadcrumb">
									
									<li class="active">
										<span>Contact Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: FORM VALIDATION EXAMPLE 1 -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								<form action="" method="post" enctype="multipart/form-data" role="form" id="crack-form">
										<div class="row">
											<div class="col-md-12">
												<?php echo $msg; ?>
											</div>
											
											
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Address <span class="symbol required"></span>
													</label>
													<input class="form-control" name="address" value="<?php echo $rs['address']; ?>" type="text">
												</div>
												<div class="form-group">
													<label class="control-label">
														Phone <span class="symbol required"></span>
													</label>
													<input class="form-control" id="phone" name="phone" value="<?php echo $rs['phone']; ?>" type="text">
												</div>
												<div class="form-group">
													<label class="control-label">
														Fax <span class="symbol required"></span>
													</label>
													<input class="form-control" id="fax" name="fax" value="<?php echo $rs['fax']; ?>" type="text">
												</div>
												<div class="form-group">
													<label class="control-label">
														Email <span class="symbol required"></span>
													</label>
													<input class="form-control" id="email" name="email" value="<?php echo $rs['email']; ?>" type="text">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<button name="save_about" class="btn btn-primary btn-wide " type="submit" value="Save">
													Save <i class="fa fa-floppy-o" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- end: FORM VALIDATION EXAMPLE 1 -->
						
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
		<script src="vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="vendor/toastr/toastr.min.js"></script>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<script src="vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-validation.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
		 <script type="text/javascript" src="ckeditor/ckeditor.js"></script> 
         <link href="ckeditor/skins/kama/editor.css" rel="stylesheet">
	      <script> 
		     CKEDITOR.replace( 'features' ); 
          </script> 
	</body>
</html>
