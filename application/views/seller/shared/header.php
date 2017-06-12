<!-- 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 
  <div class="navigation_main" >
    <nav class="navbar navbar-inverse hm_nav" style="position: fixed;top:0px;z-index:1024;width:100%; ">
      <div class="">
        <div class="navbar-header logo_style" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">
      <img  src="<?php echo base_url(); ?>assets/seller/images/logo.png" class="img-responsive" /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>seller/dashboard">Home</a></li>
            
            <li><a href="<?php echo base_url();?>seller/aboutus">About Us</a></li>
           <li><a href="<?php echo base_url();?>seller/faqs">FAQ's</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="<?php echo base_url();?>seller/contactus">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right sm_hide">
            
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Notification</a>
              <ul class="dropdown-menu notify-drop">
                <div class="drop-content">
                  <?php foreach($sellernotify as $cat_data){ ?>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""><?php  echo $cat_data->message; ?> </a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a> 
                    </div>
                  </li>
                  <?php } ?>
                </div>                
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seller Notification </a>
              <ul class="dropdown-menu notify-drop">
                <div class="drop-content">
                  <?php foreach($ordersdata as $order_data){ ?>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="notify-img">&nbsp;</div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Product:<?php  echo $order_data->product_name; ?> </a><br><a href="">Customer Name:<?php  echo $order_data->customer_name; ?> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                      
                    </div>
                  </li>
                  <?php } ?>
                </div>                
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($this->session->userdata('seller_name'));    ?></a>
      <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            
      <li> <a href="<?php echo base_url() ; ?>seller/dashboard/change_password"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a> </li>
            <li> <a href="<?php echo base_url() ; ?>seller/login/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a> </li>          
          </ul>
      
      </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
 navigation end here -->  
<style>
.navbar-nav>li>a{
	padding:0px;
}
.navbar-nav {
    float: left;
    margin: 0;
    padding-top: 12px;
}
.main-header .logo .logo-lg img {
    height: 42px;
    margin-right: 70px;
}
</style>

  <body class="hold-transition sidebar-mini " >
        <!-- Site wrapper -->
        
            <header class="main-header hm_nav" style="position: fixed;top:0px;width:100%; ">
                <a href="http://localhost/cartinhour/trunk/seller/dashboard" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="<?php echo base_url(); ?>assets/seller/dist/img/mini-logo.png" alt="CIH">
                    </span>
                    <span class="logo-lg">                        
                        <img src="<?php echo base_url(); ?>assets/seller/dist/img/logo.png" alt="Cart In Hour">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top ">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">                            
												<!-- order notifications -->
								<li class="pad_l50">
								<ul class="nav navbar-nav pad_li">  
								
								<li class="active"><a href="<?php echo base_url();?>seller/dashboard">Home</a></li>
								
								<!--<li><a href="<?php echo base_url();?>seller/aboutus">About Us</a></li>-->
							   <li><a href="<?php echo base_url();?>seller/faqs">FAQ's</a></li>
							    <li><a href="<?php echo base_url();?>seller/products/create" class="pull-right">Add Listing</a>  </li>
								<li><a href="#">Help</a></li>
								<li><a href="<?php echo base_url();?>seller/contactus">Contact Us</a></li>
								</ul>
								
                            <!-- Admin Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-bell"></i>
                                    <span class="label label-warning"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><i class="fa fa-bell"></i>Admin Notifications</li>
                                    <li>
                                        <ul class="menu">
                                        <?php foreach($sellernotify as $cat_data){ ?>
                                            <li>
                                            <a href="#" class="border-gray"><i class="fa fa-inbox"></i><?php  echo $cat_data->message; ?> <span class=" label-success label label-default pull-right">ADMIN</span></a></li>  <?php } ?>                                           
                                        </ul>
                                    </li>
                                   <li class="footer">
                                   <a href="#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>


                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                <img src="<?php echo base_url();?>assets/seller/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>seller/personnel_details"><i class="fa fa-users"></i> Update Profile</a></li>
                                    <li><a href="<?php echo base_url();?>seller/user_profile"><i class="fa fa-gear"></i> User Profile</a></li> 
                                    <li><a href="<?php echo base_url() ; ?>seller/login/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
    </body>
	<div class="modal animated  zoomIn" id="myModal_ser" role="dialog">
    <div class="modal-dialog modal-lg " style="width: 1200px;">
    
      <!-- Modal content-->
     <div class="modal-content"  >
   
        <!--<div class="modal-header " style="background-color:#006a99;color:#fff;padding:10px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Enquiry form</h4>
        </div>-->
        <div class="modal-body" style="padding:0px;margin-top:-22px;">
		<span type="button" class="close " data-dismiss="modal" style="position:absolute;top:12px;right:12px">&times;</span>
		<img style="width:100%;" class="img-responsive" src="<?php echo base_url();?>assets/seller_login/images/price_hide.png" />
		<div style="position: absolute;top:50%;color:#ddd;right:42%;">
			<p style="font-size:20px;"><b>Limited period offer</b></p>		
			<p style="font-size:20px;margin-left: 25px;">Free for 1 month</p>		<br>
			<span style="background:#006a99;padding:5px 10px ;border-radius:5px;font-size:18px;margin-left: 50px;cursor: pointer;" class="" data-dismiss="modal"  data-toggle="modal"
			data-target="#myModal_sel_mod_en">Enquiry form</span>
		</div>
      <!--<div class="container">
	  
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
                            <i class="fa fa-inr" aria-hidden="true"></i>10<span class="subscript">/mo</span></h1>
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
                           <i class="fa fa-inr" aria-hidden="true"></i>20<span class="subscript">/mo</span></h1>
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
                           <i class="fa fa-inr" aria-hidden="true"></i>35<span class="subscript">/mo</span></h1>
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
                           <i class="fa fa-inr" aria-hidden="true"></i>35<span class="subscript">/mo</span></h1>
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
    
    </div>-->
</div>
        </div>
        
      </div>
      
    </div>
	<!--Just fill form to Select plan modal -->
  <div class="modal fade" id="myModal_sel_mod_en" role="dialog">
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
                
   <form class="form-horizontal" id="enquery">

  <div class="form-group">
      <label class="control-label col-sm-4" for="">Mobile/Phone No:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="phone_number" placeholder="Enter Mobile/Phone No" name="phone_number" reqired>
      </div>
    </div> 
  <div class="form-group">
      <label class="control-label col-sm-4" for="">Select Plan :</label>
      <div class="col-sm-8">   
      <div id="register-response"></div>
                <div id="Emptyforregister"></div>       
        <select class="form-control" id="plan" name="plan" required="required">
        <option>Select Plan</option>
        <option value="Both">Both</option>
        <option value="Inventory management">Inventory management</option>
        <option value="Catalog Management">Catalog Management</option>
      </select>
      </div>
   </div>
    <div class="form-group">        
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <input type="submit" name="enquery_form" id="enquery_form" class="btn btn-primary" value="Send">
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
  <script type="text/javascript">
$(document).ready(function(){
    $("#enquery_form").click(function(e){
    e.preventDefault();

    var register;
    var plan;
    register = $("#phone_number").val();
    plan = $("#plan").val();

    //alert(plan);
    var phone =  /^(?=.*?[1-9])[0-9()-+]+$/;
   
   if(register=="")
  {
  $("#Emptyforregister").html("Please Enter Mobile Number").css("color", "red");
    $("#phone_number").focus();
        return false;
  }
  else{
  $("#Emptyforregister").html(""); 
  }
  if(plan=="")
  {
  $("#Emptyforregister").html("Chose Your Plan").css("color", "red");
    $("#phone_number").focus();
        return false;
  }
  else{
  $("#Emptyforregister").html(""); 
  }
    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>seller/services/details',
    data: {phone_number:register,plan:plan},
    success:function(data)
    {
      //alert(data);
    if(data == 0)
    {
   $("#Emptyforregister").html("The Phone Number you entered already exist..").css("color", "red");
     $('#enquery_form')[0].reset(); 
    }
    else if(data == 1)
    {
        $("#Emptyforregister").html("Success..").css("color", "green");
    document.location.href='<?php echo base_url('seller/services'); ?>'; 
 }
    },
    });
    });
    });
</script>
