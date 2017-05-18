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
<!--style end here -->
<!--javascript start here -->
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/bootstrap.min.js"></script>
<!--javascript end here -->


</head>

<body>
<div class="main_wrapper"> 
  <!--header part start here -->
  <div class="nav-wrapper">
    <div class="">
      <div class="header">
        <div class="col-md-6 col-xs-6">
          <div class="logo">
            <p><a href="<?php echo base_url(); ?>seller/login"><img src="<?php echo base_url();?>assets/seller_login/images/logo.png" /></a>
			</p>
          </div>
        </div>
		<div class="col-md-6 col-xs-6 hidden-lg ">
          <div class="pull-right">
              <input type="submit" data-toggle="modal" data-target="#myModa2" class="btn btn-primary " value="Login">
          </div>
        </div>
        <div class="col-md-6 col-xs-12 hidden-xs">
          <div class="loginfields">
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
			
          </div>
		  <?php echo $this->session->flashdata('msg'); ?>
        </div>
      </div>
    </div>
  </div>
  <!--header part end here --> 
  <!--login  Modal -->
   <div class="modal fade" id="myModa2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#002f3f;color:#fff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
       <div class="modal-body">
            <form method="post" action='' name="login_form">
              <p><input  class="form-control" type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
              <p><input class="form-control" type="password" class="span3" name="passwd" placeholder="Password"></p>
              <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>
          </div>
          <div class="modal-footer">
            New To MyWebsite.com?
            <a href="#" class="btn btn-primary">Register</a>
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
  
  
</script>