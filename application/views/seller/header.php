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
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/animate2.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/custom.min.css" />
<!--style end here -->
<!--javascript start here -->
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/animate-it.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.smartWizard"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>


<!--javascript end here -->


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--<div class="loader"></div>-->
<div class="main_wrapper"> 
  <!--header part start here -->
  <div class="nav-wrapper">
    <div class="">
      <div class="header hm_nav " >
       
    <div class="">
    
    
  <nav class="navbar  ">
    <div class="">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">
            <p><a href="<?php echo base_url(); ?>seller/login"><img style="width:57%;" class="img-responsive" src="<?php echo base_url();?>assets/seller_login/images/logo.png" /></a>
      </p>
          </a>
    </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <!--<a class="navbar-brand" href="#">Brand</a>--> 
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url('seller/login');?>#home_scr">HOME <span class="sr-only">(current)</span></a></li>
         <!-- <li><a href="#benifits_sc">BENIFITS</a></li>-->
      <li><a href="#how_its_w">HOW IT WORKS</a></li>
         
          <li><a href="#pricing_scr">PRICING</a></li>
         
          <li><a href="#ourservices_scr">OUR SERVICES</a></li>
            <li><a href="#about_sc">ABOUT US</a></li>
       <li><a href="#faq_sc">FAQ's</a></li>
        <li><a href="#contact_sc">CONTACT US</a></li>
         
     
        </ul>
  <ul class="nav navbar-nav navbar-right">
      <!--<li><a data-toggle="modal" data-target="#myModa3"></span> Sign Up</a></li>-->
      <li><a  data-toggle="modal" data-target="#myModa2">SIGN UP / LOGIN</a></li>
    </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid
    <div class="underline"></div> -->
  </nav>
    
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
            <li><a data-toggle="tab" href="">Register</a></li>
          </ul>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       <div class="modal-body">
          
        <div class="form-body">
          
          <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
            <div class="row">
            <div class="col-xs-6">
            <div class="innter-form">
              <form method="post"  name="login_form" id="login_submit">
              <div id="login-response"></div>
                <div id="EmptyforError"></div>
              <label >Email Address</label>
              <input  name="login_email" id="login_email" class="form-control" type="text" name="username" autofocus>
              <label>Password</label>
              <input  id="login_password" name="login_password" class="form-control" type="password" name="password">
              <button class="btn btn-primary" type="submit" id="login_do">Sign In</button>
              <div class="col-md-3 paddingRightZero">
                        <div class="pswrd text-right"><a href="#" tabindex="5" class="forgot-password" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Unable to Login?</a></div>
                      </div>
              </form>
            </div>
            </div>
            <div class="col-xs-6 bor_lef">
              <div class="innter-form">
                <form>
                <label >Enter your Mobile Number</label>
                <input   class="form-control" type="text" name="username" autofocus>
                </form>
              </div>
              <div class="clearfix"></div>
              <button class="btn btn-primary btn-sm mar_t10" type="submit">Get OTP</button>
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
            <!--<div id="" class="tab-pane fade">
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
                       <?php //foreach($locationdata as $location_data)  { ?>
                       <option value="<?php //echo $location_data->location_name;?>"><?php //echo $location_data->location_name;?></option>
                       
                       <?php //} ?>
                      </select>
                      <span id="errorlocation" style="color:red; font-size: 13px;"></span>
                  </div>
                  <div class="col-xs-12 col-md-6 nopaddingright reginput">
                    <label for="ex7">VAT/TIN Number</label>
                    <input class="form-control" id="seller_license" name="seller_license" type="text">
                    <span id="errorlicense" style="color:red; font-size: 13px;"></span>
                  </div>
                  
                   
                  <div class="col-xs-12 col-md-6 nopaddingright reginput">
                    <label for="ex12">Address</label>
                    <textarea class="form-control" id="seller_address" name="seller_address"></textarea>
                    <span id="erroraddress" style="color:red; font-size: 13px;"></span>
                  </div>
                  <div class="col-xs-12 col-md-6 " style="margin-top:30px">
                    <label for="ex12"></label><br>
                    <button class="btn btn-primary">Detect my Location</button>
                   
                   
                  </div>
                  </div>
                   <label>
                  <input type="checkbox" name="checkbox" value="check" id="terms_condition">
                  If you have read and agree to the <a href="#">Terms and Conditions,</a> please continue</label>
              <button type="submit">Register now</button>
              
              </form>
              </div>
            
              <div class="clearfix"></div>
            </div>-->
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
  
  
  <!--Just fill form to Select plan modal -->
  <div class="modal fade" id="myModal_sel_mod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <div class="modal-content">
   
        <div class="modal-header " style="background-color:#006a99;color:#fff;padding:10px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Enquiry form</h4>
        </div>
        <div class="modal-body">
          <div class="container">
  <div class="row">
       
  
    <div class="col-md-6">
   <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-4" for="">Buiness Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="" placeholder="Enter Buiness Name" name="" reqired>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="">First Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="" placeholder="Enter First Name" name="" reqired>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="">Mobile/Phone No:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="" placeholder="Enter Mobile/Phone No" name="" reqired>
      </div>
    </div> 
  <div class="form-group">
      <label class="control-label col-sm-4" for="email">Valid Email Id:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="">Business OPeration:</label>
      <div class="col-sm-8">          
        <select class="form-control" id="sel1">
        <option>select your Business OPeration</option>
        <option>Business OPeration1</option>
        <option>Business OPeration 2</option>
        <option>Business OPeration 3</option>
      </select>
      </div>
    </div> 
  <div class="form-group">
      <label class="control-label col-sm-4" for="">Select Plan :</label>
      <div class="col-sm-8">          
        <select class="form-control" id="sel1">
        <option>select plan</option>
        <option>plan1</option>
        <option>plan 2</option>
        <option>plan 3</option>
      </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
      </div>
      <div class="col-md-3">&nbsp;</div>
      
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--end Just fill form to Select plan Modal -->
   <!--Just fill form to Select plan modal -->
  <div class="modal animated  zoomIn" id="myModal_ser" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 1200px;">
    
      <!-- Modal content-->
     <div class="modal-content">
   
        <div class="modal-header " style="background-color:#006a99;color:#fff;padding:10px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Enquiry form</h4>
        </div>
        <div class="modal-body">
      <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Bronze</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $10<span class="subscript">/mo</span></h1>
                        <small>1 month FREE trial</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                1 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                100K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                100MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a>
                    1 month FREE trial</div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="panel panel-success">
                <div class="cnrflash">
                    <div class="cnrflash-inner">
                        <span class="cnrflash-label">MOST
                            <br>
                            POPULR</span>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Silver</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $20<span class="subscript">/mo</span></h1>
                        <small>1 month FREE trial</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                2 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                5 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                100K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                200MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a>
                    1 month FREE trial</div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Gold</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $35<span class="subscript">/mo</span></h1>
                        <small>1 month FREE trial</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                5 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                20 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                300K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                500MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial</div>
            </div>
        </div>
    <div class="col-xs-12 col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Gold</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $35<span class="subscript">/mo</span></h1>
                        <small>1 month FREE trial</small>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                5 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                20 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                300K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                500MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial</div>
            </div>
        </div>
    
    </div>
</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <!--end Just fill form to Select plan Modal -->
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

<script>
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

</script>
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

<!--script for scrolling pages-->
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


</script>




<script type="text/javascript">
 
$(document).ready(function(){
    $("#login_do").click(function(e){
    e.preventDefault();
    
    
    var login_email = $("#login_email").val();
 
  var login_password = $("#login_password").val();
  
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(login_email == "" && login_password == "" )
  {
   
  $("#EmptyforError").html("Please Enter email and password").css("color", "red");
        $("#login_email").focus();
        return false;
   
  }
  else{
   
  $("#EmptyforError").html(""); 
   
  }
  
  
      
      if(login_email !="" && login_email .match(mailformat)) 
      {
        $("#EmptyforError").html("");
      }
      else if(login_email !="" && !login_email .match(mailformat)){
        
        $("#EmptyforError").html("Invalid Email Format").css("color", "red");
        $("#login_email").focus();
        return false;
        }
        
  

    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>seller/login/do_login',
    data: {login_email:login_email,login_password:login_password},
    success:function(data)
   
    {
     
    if(data == 0)
    {
   $("#login-response").html("Invalid username or password.").css("color", "red");
     $('#login_submit')[0].reset();
      
    }
 else if(data == 1)
 {
  
 window.location='<?php echo base_url(); ?>seller/dashboard'; 
  
  
 }
    },
    error:function()
    {
    $("#login-response").html("Oops! Error.  Please try again later!!");
    }
    });
    
    });
    });
</script>