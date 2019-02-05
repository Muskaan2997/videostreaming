<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
    	<head>
		<title>Videos Streaming</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/plan.css" rel="stylesheet" type="text/css"  media="all" />
			
			<?php //include'include/head.php'; ?>
	</head>
<body>
   <div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                        <h1> Basic Package</h1>
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container">
            
            <!--BLOCK ROW START-->
            <div class="row">
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Basic</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">99</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<!--<a class="" href="javascript:void(0)">Skip</a>-->
                        	<a class="" href="www.sandbox.paypal.com/uk/signin.php" target="_blank">Pay Now</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                
                <!--<div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    
                </div>
            </div>	
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             
	<footer>
    	
    </footer>
</div>
    
    
    
    
    
<h3>Mobile <br> $100.00</h3>
<form action="https://www.paypal.com/uk/signin" method="post" target="_top">
<input type='hidden' name='business' value='Paypal_Business_TestAccount_Id'>
<input type='hidden' name='item_name' value='Mobile'>
<input type='hidden' name='item_number' value='CAM#N1'>
<input type='hidden' name='amount' value='0.01'>
<input type='hidden' name='no_shipping' value='1'>
<input type='hidden' name='currency_code' value='USD'>
<input type='hidden' name='notify_url' value='http://SITE NAME/payment.php'>
<input type='hidden' name='cancel_return' value='http://SITE NAME/cancel.php'>
<input type='hidden' name='return' value='http://SITE NAME/success.php'>
<!-- COPY and PASTE Your Button Code -->
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="### COPY FROM BUTTON CODE ###">
<input type="image" src="images/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>


</body>
</html>