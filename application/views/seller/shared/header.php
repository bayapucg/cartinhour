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
								
								<li><a href="<?php echo base_url();?>seller/aboutus">About Us</a></li>
							   <li><a href="<?php echo base_url();?>seller/faqs">FAQ's</a></li>
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