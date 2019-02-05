<?php include 'includes/session.php';
$admin_id=$_SESSION['admin_id'];
$id = $_GET['id'];
$query1 = mysqli_query($con,"select * from user where id = '$id'");
$rss = mysqli_fetch_assoc($query1);

 ?><!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Edit Student</title>
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
			 #checkboxes,#radios  {
	position:relative;
  -webkit-user-select: none;
  /* Chrome all / Safari all */
  -moz-user-select: none;
  /* Firefox all */
  -ms-user-select: none;
  /* IE 10+ */
  user-select: none;
  /* Likely future */
}
#checkboxes .whatever,#radios .whatever {
  background: white;
  margin:0 !important;
  cursor: pointer;
  display: inline-block;
  padding: 5px;
  box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.12), 0 1px 6px 0 rgba(0, 0, 0, 0.12);
  width: 100%;
}
#checkboxes img,#radios img  {
  margin-bottom: 9px;
}
#checkboxes input[type=checkbox],#radios input[type=radio] {
  display: none;
}
#checkboxes .check_details,#radios .check_details {
  color: #4a4a4a;
}
#checkboxes .check_details i span,#radios .check_details i span {
  display: inline-block;
  margin-left: 3px;
  font-family: 'Open Sans', sans-serif;
  font-size: 13px;
}
#checkboxes .check_name_div,#radios .check_name_div {
  font-size: 16px;
  font-weight: 400;
  margin-top: 5px;
}
#checkboxes .check_overlay,#radios .check_overlay {
  background: rgba(255, 255, 255, 0.8);
  cursor: pointer;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  overflow: hidden;
  right: 0px;
  display: none;
  z-index:1;
}
#checkboxes .check_overlay i,#radios .check_overlay i {
  font-size: 28px;
  margin-top: 0%;
  margin-left:0%;
  color: #f8931d;
  top: 25%;
    left: 25%;
	position:absolute;
}

@media screen and (max-width: 500px) {
  .cat_check .col-xs-6 {
    float: none;
    width: 100%;
  }
}
label{font-weight:normal;}

@media (max-width: 600px){
.content-container
{
	padding:0!important;
}
#inbox .col-md-3 img{
    max-height:130px;
}
#inbox .col-md-9 {
	font-size:13px;
}
.panel-footer {
   
    position: relative;
    z-index: 100;
}
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
									<h1 class="mainTitle">Edit User</h1>
								  <span class="mainDescription">Change user details</span>
								</div>
								<ol class="breadcrumb">
									<li>
										<span>Users</span>
									</li>
									<li class="active">
										<span>Edit User</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: FORM VALIDATION EXAMPLE 1 -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								<form action="update_stu1.php" method="post" enctype="multipart/form-data" role="form" id="stu-form">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-success">
    <strong>Success!</strong>Updated successfully .
  </div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
												</div>
											</div>
											
												<input class="form-control" id="id"  value="<?=$rss['id']?>" name="id" type="hidden">
											<div class="col-md-6">
											   <div class="form-group" >
													<label class="control-label">
														User Name<span class="symbol required"></span>
													</label>
													<input class="form-control" id="name" placeholder="Student Name" value="<?=$rss['username']?>" name="name" error-msg="Please enter student name!">
												</div>
												<div class="form-group" >
													<label class="control-label">
														Email<span class="symbol required"></span>
													</label>
													<input class="form-control" id="email" placeholder="Email" value="<?=$rss['email']?>" name="email" error-msg="Please enter email!">
												</div>
												<div class="form-group" >
													<label class="control-label">
														Phone <span class="symbol required"></span>
													</label>
													<input class="form-control" id="phone" placeholder="Phone No." value="<?=$rss['mobile']?>" name="phone" error-msg="Please enter phone no!">
												</div>
												<div class="form-group" >
													<label class="control-label">
														Password <span class="symbol required"></span>
													</label>
													<input class="form-control" id="password" placeholder="Password" value="<?=$rss['password']?>" name="password" error-msg="Please enter password!">
												</div>
												<?php if($rss['image'] != '') { ?>
												<img src="../images/<?=$rss['image']?>" style="width:100px"/>
												<?php } ?>
												<input class="form-control opt" id="old"  value="<?=$rss['image']?>" name="old" type="hidden">
												<div class="form-group" >
													<label class="control-label">
														Image
													</label>
													<input type="file" name="qimage"  class="opt form-control" >
												</div>
											</div>
											<div class="col-md-6" id="ques-details" >
												
												
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<button name="save_ques" class="btn btn-primary btn-wide " type="submit">
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
		     //CKEDITOR.replace( 'features' ); 
          </script> 
		  <script>
		  
$(function() {
	

	$("#stu-form input, #stu-form select, #stu-form textarea").change(function() {  
		$(this).next(".custom-er").remove();
		$(this).closest('.form-group').removeClass('has-error');
	});
			  
			  
    $("#stu-form").submit(function() {
		$error=0;
		$(".custom-er").remove();
		$("#stu-form").find('.form-group').removeClass('has-error');
        $("#stu-form input,#stu-form select,#stu-form textarea").not('.opt').each(function() {
            if($.trim($(this).val())=="") {
               $(this).closest('.form-group').addClass('has-error');
			   $(this).after('<span class="custom-er help-block">'+$(this).attr('error-msg')+'</span>');
			   $error++;
            }
        });
		if($error==0)
		{
			var form = $("#stu-form")[0];
			var errorHandler1 = $('.errorHandler', form);
			var successHandler1 = $('.successHandler', form);
		    $.ajax({
				url: $(form).attr('action'),
				type: $(form).attr('method'),
				data: new FormData(form),
				cache:false,
				contentType: false,
				processData: false,
				success: function(response) {
                if(response=="ok")
				{
					successHandler1.text('Updated Successfully!');
					successHandler1.show().delay(3000).fadeOut();
                    errorHandler1.hide();
				}
				else
				{
				    errorHandler1.text('Error : '+response);
				    successHandler1.hide();
                    errorHandler1.show();
				}			 
            }            
        });  
		}
		return false;
    });
});
		  
jQuery(document).ready(function() {		  
    jQuery(document).on('click','#radios label',function(){
    jQuery('#radios .check_overlay').hide();
		jQuery(this).prevUntil("input").prop('checked', true);
		jQuery(this).prev().show();
		//console.log($(this).closest('input').id);
	}); //document-ready end
  

  jQuery(document).on('click','#checkboxes label',function(){
		jQuery(this).prevUntil("input").prop('checked', true);
		jQuery(this).prev().show();
		//console.log($(this).closest('input').id);
	}); //document-ready end

	jQuery(document).on('click','#checkboxes .check_overlay',function(){
		jQuery(this).prev().prop('checked', false);
		jQuery(this).hide();
	});
  
}); //document-ready end
		  </script>
	</body>
</html>
