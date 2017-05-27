<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>::Cart in Hour::</title>
<link rel="icon" href="<?php echo base_url();?>assets/seller_login/images/fav.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/font-awesome.min.css" />
<!--style start here -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/animate.css" />
<!--style end here -->
<!--javascript start here -->
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
        $(window).load(function(){
            $('div.loader').fadeOut(1000);
        });
</script>
<!--javascript end here -->


</head>

<body>
<div class="loader"></div>
<div class="main_wrapper"> 
  <!--header part start here -->
  <div class="nav-wrapper">
    <div class="">
	  <!-- <nav class="navbar navbar-default hm_nav" data-spy="affix" data-offset-top="522">-->
      <div class="header hm_nav " >
       <!-- <div class="col-md-2 col-xs-6">
          <div class="logo">
            <p><a href="<?php echo base_url(); ?>seller/login"><img src="<?php echo base_url();?>assets/seller_login/images/logo.png" /></a>
			</p>
          </div>
        </div>
		<div class="col-md-6 col-xs-6 hidden-lg ">
          <div class="pull-right">
              <input type="submit" data-toggle="modal" data-target="#myModa2" class="btn btn-primary " value="Login">
          </div>
        </div>-->
    <div class="">
		
		
	<nav class="navbar ">
    <div class="">
	 <div class="navbar-header">
      <a class="navbar-brand" href="#">
            <p><a href="<?php echo base_url(); ?>seller/login"><img style="width:35%;" class="img-responsive" src="<?php echo base_url();?>assets/seller_login/images/logo.png" /></a>
			</p>
          </a>
    </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <!--<a class="navbar-brand" href="#">Brand</a>--> 
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url(); ?>seller/login">HOME <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo base_url(); ?>seller/benifits">BENIFITS</a></li>
		  <li><a href="<?php echo base_url(); ?>seller/howitworks">HOW IT WORKS</a></li>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOW IT WORKS <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>-->
          <li><a href="<?php echo base_url();?>seller/pricing_calculator">PRICINGS</a></li>
          <li><a href="<?php echo base_url();?>seller/faq">FAQ's</a></li>
          <li><a href="<?php echo base_url();?>seller/services">OUR SERVICES</a></li>
          <!--<li><a href="<?php //echo base_url();?>seller/LearningCenter">HELP</a></li>-->
		  <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HELP <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php //echo base_url();?>seller/faq">FAQ's</a></li>
              <li><a href="<?php //echo base_url();?>seller/LearningCenter">Learning Center</a></li>
            </ul>
          </li>-->
		 
        </ul>
	<ul class="nav navbar-nav navbar-right">
      <!--<li><a data-toggle="modal" data-target="#myModa3"></span> Sign Up</a></li>-->
      <li><a  data-toggle="modal" data-target="#myModa2"><span class="glyphicon glyphicon-log-in"></span>Sign Up / Login</a></li>
    </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid
    <div class="underline"></div> -->
  </nav>
		
          <!--<div class="loginfields">
            <form action="<?php echo base_url();?>seller/login/do_login" method="post" onSubmit="return loginvalidateof();">
              <div class="form-group">
                <div class="col-md-1"> &nbsp </div>
                <div class="col-md-4 hdr-form-input_s paddingRightZero">
                  <label for="usr">Email/Mobile Number :</label>
                  <input type="text" class="form-control" id="seller_name" name="seller_name">
				  <span id="errorname" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-md-4 hdr-form-input_s paddingRightZero">
                  <label for="pwd">Password :</label>
                  <input type="password" class="form-control" id="seller_password" name="seller_password">
				  <span id="errorpassword" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-md-3 paddingRightZero">
                  <div class="pswrd text-right"><a href="#" tabindex="5" class="forgot-password" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Unable to Login?</a></div>
                  <input type="submit" class="btn btn-info san_submit" value="Login">
				  
                </div>
				
              </div>
            </form>
			
          </div>-->
		  <?php echo $this->session->flashdata('msg'); ?>
        </div>
      </div>
    </div>
  </div>
  <!--header part end here --> 
  <!--login  Modal -->
   <div class="modal animated  zoomIn" id="myModa2" role="dialog">
    <div class="modal-dialog modal-md "  >
      <div class="modal-content ">
        <div class="modal-header">
          <ul class="nav nav-tabs final-login">
						<li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
						<li><a data-toggle="tab" href="#sectionB">Register</a></li>
					</ul>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       <div class="modal-body">
            <!--<form method="post" action="<?php echo base_url();?>seller/login/do_login" name="login_form" onSubmit="return loginvalidateof();">
              <p><input  class="form-control" type="text" class="span3" name="seller_name" id="seller_name" placeholder="Email" autofocus></p>
              <span id="errorname" style="color:red; font-size: 13px;"></span>
              <p><input class="form-control" type="password" class="span3" name="seller_password" name="seller_password" placeholder="Password"></p>
              <span id="errorpassword" style="color:red; font-size: 13px;"></span>
              <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>-->
				<div class="form-body">
					
					<div class="tab-content">
						<div id="sectionA" class="tab-pane fade in active">
						<div class="row">
						<div class="col-xs-6">
						<div class="innter-form">
							<form method="post" action="<?php echo base_url();?>seller/login/do_login" name="login_form" onSubmit="return loginvalidateof();">
							<label >Email Address</label>
							<input  name="seller_name" id="seller_name" class="form-control" type="text" name="username" autofocus>
							<label>Password</label>
							<input  id="seller_password" name="seller_password" class="form-control" type="password" name="password">
							<button class="btn btn-primary" type="submit">Sign In</button>
							<a class="col_a"href="">Forgot Password?</a>
							</form>
						</div>
						</div>
						<div class="col-xs-6 bor_lef">
						  <p class="lead co_reg">Register now for <span class="text-successs">FREE</span></p>
						  <ul class="list-unstyled" style="line-height: 2">
							  <li><span class="fa fa-check text-successs"></span> See all your orders</li>
							  <li><span class="fa fa-check text-successs"></span> Fast re-order</li>
							  <li><span class="fa fa-check text-successs"></span> Save your favorites</li>
							  <li><span class="fa fa-check text-successs"></span> Fast checkout</li>
							  <li><span class="fa fa-check text-successs"></span> Get a gift <small>(only new customers)</small></li>
							  <li><a class="col_a" href="/read-more/"><u>Read more</u></a></li>
						  </ul>
						  <p><a data-toggle="tab" href="#sectionB" class="btn btn-info btn-block">Yes please, register now!</a></p>
						</div>
						</div>
						<div class="clearfix"></div>
							<div class="social-login">
							<p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
							<ul>
							<li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
							<li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
							</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div id="sectionB" class="tab-pane fade">
							<div class="innter-form">
							<form class="sa-innate-form" method="post">
								<div class="form-group">
								  <?php echo $this->session->flashdata('msg1'); ?>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex1">Name</label>
									  <input class="form-control" id="seller_fullname" name="seller_fullname" type="text" autofocus>
									  <span id="errorname1" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex2">Email Id</label>
									  <input class="form-control" id="seller_email" name="seller_email" type="text">
									  <span id="erroremail" style="color:red; font-size: 13px;"></span>
									</div>
									
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex4">Mobile Number</label>
									  <input class="form-control" id="seller_mobile" name="seller_mobile" maxlength="10" type="text">
									  <span id="errorphone" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex5">Shop Name</label>
									  <input class="form-control" id="seller_shop" name="seller_shop" type="text">
									  <span id="errorshop" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex6">Shop Location</label>
									  <select class="form-control" id="location_name" name="location_name">
											 <option value="">-Select Location-</option>
											 <?php foreach($locationdata as $location_data)  { ?>
											 <option value="<?php echo $location_data->location_name;?>"><?php echo $location_data->location_name;?></option>
											 
											 <?php } ?>
										  </select>
										  <span id="errorlocation" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex7">VAT/TIN Number</label>
									  <input class="form-control" id="seller_license" name="seller_license" type="text">
									  <span id="errorlicense" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex8">Aadhar Number</label>
									  <input class="form-control" id="seller_adhar" name="seller_adhar" maxlength="12"  type="text">
									  <span id="erroradhar" style="color:red; font-size: 13px;"></span>
									</div>
									<div class="col-xs-12 col-md-6 nopaddingright reginput">
									  <label for="ex9">Bank Acc Number</label>
									  <input class="form-control" id="seller_bank" name="seller_bank" type="text">
									  <span id="errorbank" style="color:red; font-size: 13px;"></span>
									</div>
								   
									<div class="col-xs-12 col-md-12 nopaddingright reginput">
									  <label for="ex12">Address</label>
									  <textarea class="form-control" id="seller_address" name="seller_address"></textarea>
									  <span id="erroraddress" style="color:red; font-size: 13px;"></span>
									</div>
								  </div>
								   <label>
                  <input type="checkbox" name="checkbox" value="check" id="terms_condition">
                  If you have read and agree to the <a href="#">Terms and Conditions,</a> please continue</label>
							<button type="submit">Register now</button>
							
							</form>
							</div>
						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
          </div>
         
      </div>
    </div>
  </div>
  
  <!--register  Modal -->

   <div class="modal fade" id="myModa3" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#39b9f9;color:#fff; border-radius: 5px 5px 0px 0px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
       <div class="modal-body">
            <form action="<?php echo base_url(); ?>seller/login/insert" method="post" enctype="multipart/form-data" onSubmit="return sellerinfvalidateof();">
              <div class="form-group">
			  <?php echo $this->session->flashdata('msg1'); ?>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex1">Name</label>
                  <input class="form-control" id="seller_fullname" name="seller_fullname" type="text" autofocus>
				  <span id="errorname1" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex2">Email Id</label>
                  <input class="form-control" id="seller_email" name="seller_email" type="text">
				  <span id="erroremail" style="color:red; font-size: 13px;"></span>
                </div>
                
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex4">Mobile Number</label>
                  <input class="form-control" id="seller_mobile" name="seller_mobile" maxlength="10" type="text">
				  <span id="errorphone" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex5">Shop Name</label>
                  <input class="form-control" id="seller_shop" name="seller_shop" type="text">
				  <span id="errorshop" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex6">Shop Location</label>
                  <select class="form-control" id="location_name" name="location_name">
                         <option value="">-Select Location-</option>
						 <?php foreach($locationdata as $location_data)  { ?>
                         <option value="<?php echo $location_data->location_name;?>"><?php echo $location_data->location_name;?></option>
                         
						 <?php } ?>
                      </select>
					  <span id="errorlocation" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex7">VAT/TIN Number</label>
                  <input class="form-control" id="seller_license" name="seller_license" type="text">
				  <span id="errorlicense" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex8">Aadhar Number</label>
                  <input class="form-control" id="seller_adhar" name="seller_adhar" maxlength="12"  type="text">
				  <span id="erroradhar" style="color:red; font-size: 13px;"></span>
                </div>
                <div class="col-xs-12 col-md-6 nopaddingright reginput">
                  <label for="ex9">Bank Acc Number</label>
                  <input class="form-control" id="seller_bank" name="seller_bank" type="text">
				  <span id="errorbank" style="color:red; font-size: 13px;"></span>
                </div>
               
                <div class="col-xs-12 col-md-12 nopaddingright reginput">
                  <label for="ex12">Address</label>
                  <textarea class="form-control" id="seller_address" name="seller_address"></textarea>
				  <span id="erroraddress" style="color:red; font-size: 13px;"></span>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="checkbox" value="check" id="terms_condition">
                  If you have read and agree to the <a href="#">Terms and Conditions,</a> please continue</label>
				 <div id="errorterms" style="color:red; font-size: 13px;"></div> 
              </div>
			  
              <input type="submit" class="btn btn-primary" value="Submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the Terms and Conditions first.');return false}">
            </form>
          </div>
          
      </div>
    </div>
  </div>
  
  
  <!--Forget Password Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-body pass_list">
                    <form method="post" id="forgot_submit">
                      <h4>How do you want temporary password to be send:</h4>
					  <div id="forgot-response"></div>
					  <div id="EmptyforErr"></div>
                      <label class="radio-inline mki">
                        <input type="radio" name="optradio" data-toggle="collapse" data-target="#demo">
                        E-Mail </label>
                      <div id="demo" class="collapse">
                        <input type="text" class="form-control" id="forgot_email" name="forgot_email" placeholder="Please enter Email id">
                        
                        <span id="EmailforErr"></span>
                      </div>
                      <div class="clearfix"></div>
                      <label class="radio-inline mki">
                        <input type="radio" name="optradios" data-toggle="collapse" data-target="#pho">
                        Phone Number </label>
                      <div id="pho" class="collapse">
                        <input type="text" class="form-control" id="forgot_mobile" name="forgot_mobile" placeholder="Please enter Mobile No">
                         <span id="MobileforErr"></span>
                      </div>
                      <br>
                      <button type="submit" id="forgot_password" class="btn btn-success">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
			
			
<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

<script type="text/javascript" language="javascript">
 
    $(document).ready(function(){
    $("#forgot_password").click(function(e){
    e.preventDefault();
    
    
    var forgot_email = $("#forgot_email").val();
	
	 var forgot_mobile = $("#forgot_mobile").val();
	 
	 
	  //alert(forgot_mobile);
   //alert(forgot_email);
  
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      
     var phone =  /^(?=.*?[1-9])[0-9()-+]+$/;
	 
	 
	 if(forgot_email == "" && forgot_mobile == "" )
	 {
		 
		$("#EmptyforErr").html("Please Enter email or phone number").css("color", "red");
        $("#forgot_email").focus();
        return false;
		 
	 }
	 else{
		 
		$("#EmptyforErr").html(""); 
		 
	 }
	 
	 
      
      if(forgot_email !="" && forgot_email .match(mailformat)) 
      {
        $("#EmailforErr").html("");
      }
      else if(forgot_email !="" && !forgot_email .match(mailformat)){
        
        $("#EmailforErr").html("Invalid Email Format").css("color", "red");
        $("#forgot_email").focus();
        return false;
        }
        
        
        if(forgot_mobile !="" && forgot_mobile .match(phone)) 
      {
        $("#MobileforErr").html("");
      }
      else if(forgot_mobile !="" && !forgot_mobile .match(phone)){
        
        $("#MobileforErr").html("Invalid Phone Number").css("color", "red");
        $("#forgot_mobile").focus();
        return false;
        } 
        
  

    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>seller/login/forgot',
    data: {forgot_mobile:forgot_mobile,forgot_email:forgot_email},
    success:function(data)
   
    {
     //alert(data);
    if(data == 0)
    {
		 $("#forgot-response").html("Failed to send").css("color", "red");
    $('#forgot_submit')[0].reset();
      
    }
	else if(data == 4)
    {
		 $("#forgot-response").html("The Email id You Entered Not Found").css("color", "red");
    $('#forgot_submit')[0].reset();
      
    }
	else if(data == 5)
    {
		 $("#forgot-response").html("The Phone Number You Entered Not Found").css("color", "red");
    $('#forgot_submit')[0].reset();
      
    }
	else if(data == 6)
    {
		 $("#forgot-response").html("The Details You Entered Not Found").css("color", "red");
    $('#forgot_submit')[0].reset();
      
    }
	else if(data == 7)
    {
		 $("#forgot-response").html("Temporary Password Successfully Sent to Your Email").css("color", "red");
    $('#forgot_submit')[0].reset();
      
    }
    else{
     $("#forgot-response").html("Temporary Password Successfully Sent").css("color", "Green");
	   $('#forgot_submit')[0].reset();
   
    }
    },
    error:function()
    {
    $("#forgot-response").html("Oops! Error.  Please try again later!!");
    }
    });
    
    });
    });
  
   $(window).scroll(function() {
if ($(this).scrollTop() > 350) {
$('.hm_nav').addClass('affix');
$('.hm_nav').addClass('animated fadeInDown');
}
else{
$('.hm_nav').removeClass('affix');
$('.hm_nav').removeClass('animated fadeInDown');
}
 });
</script>