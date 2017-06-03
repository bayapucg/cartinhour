
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <!--navigation start here -->
  <div class="navigation_main">
    <nav class="navbar navbar-inverse hm_nav">
      <div class="">
        <div class="navbar-header logo_style" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">
      <img  src="<?php echo base_url(); ?>assets/seller/images/logo.png" class="img-responsive" /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>seller/dashboard">Home</a></li>
            <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>-->
            <li><a href="<?php echo base_url();?>seller/aboutus">About Us</a></li>
           <li><a href="<?php echo base_url();?>seller/faqs">FAQ's</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="<?php echo base_url();?>seller/contactus">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right sm_hide">
            <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->

            <!-- seller notifcation -->
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Notification</a>
              <ul class="dropdown-menu notify-drop">
                <div class="drop-content">
                  <?php foreach($sellernotify as $cat_data){ ?>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""><?php  echo $cat_data->message; ?> </a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                      <!-- <hr> -->
                      <!-- <p class="time">Şimdi</p> -->
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
                      <!-- <hr> -->
                      <!-- <p class="time">Şimdi</p> -->
                    </div>
                  </li>
                  <?php } ?>
                </div>                
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo ucfirst($this->session->userdata('seller_name'));    ?></a>
      <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <!--<li class="eborder-top"> <a href="#"><i class="icon_profile"></i> My Profile</a> </li>-->
      <li> <a href="<?php echo base_url() ; ?>seller/dashboard/change_password"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a> </li>
            <li> <a href="<?php echo base_url() ; ?>seller/login/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a> </li>          
          </ul>
      
      </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
  <!--navigation end here --> 