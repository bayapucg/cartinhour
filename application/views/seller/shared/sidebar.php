<div class="ser_mian">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="nav-side-menu" style="position: fixed;top:100px; left:0;height:600px;">
            <div class="brand">Welcome</div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
              <ul id="menu-content" class="menu-content collapse out">
                <!--<li> <a href="<?php //echo base_url(); ?>seller/subcategory"> <i class="fa fa-dashboard fa-lg"></i> Subcategories </a> </li>-->
                <li  data-toggle="collapse" data-target="#listings" class="collapsed active"> <a href="#"><i class="fa fa-list" aria-hidden="true"></i> Listings <span class="arrow"></span></a> </li>
                <ul class="sub-menu collapse" id="listings">
                  <li class="active"><a href="<?php echo base_url();?>seller/products">My Listing</a></li>
                  <li><a href="<?php echo base_url();?>seller/products/track_requests">Track Approval Requests</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#orders" class="collapsed"> <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Orders <span class="arrow"></span></a> </li>
                <ul class="sub-menu collapse" id="orders">
				<li><a href="<?php echo base_url();?>seller/orders/new_orders">New Orders</a></li>
                  <li><a href="<?php echo base_url();?>seller/orders/assigned_orders">Assigned Orders</a></li>
                  <li><a href="<?php echo base_url();?>seller/orders/inprogress_orders">In-progress Orders</a></li>
				   <li><a href="<?php echo base_url();?>seller/orders/delivered_orders">Delivered Orders</a></li>
				    <li><a href="<?php echo base_url();?>seller/orders/rejected_orders">Cancelled Orders</a></li>
                </ul>
                 <li data-toggle="collapse" data-target="#returns" class="collapsed"> <a href="#"><i class="fa fa-retweet" aria-hidden="true"></i> Returns <span class="arrow"></span></a> </li>
                <ul class="sub-menu collapse" id="returns">
                 
                  <li><a href="<?php echo base_url();?>seller/products/returns">Returns</a></li>
                </ul>
                <li> <a href="<?php echo base_url();?>seller/payments"><i class="fa fa-credit-card" aria-hidden="true"></i> Payments Overview </a> </li>
                 <li> <a href="<?php echo base_url();?>seller/performance"><i class="fa fa-credit-card" aria-hidden="true"></i> Performance </a> </li>
                <!--<li data-toggle="collapse" data-target="#performance" class="collapsed"> <a href="#"><i class="fa fa-bolt" aria-hidden="true"></i> Performance <span class="arrow"></span></a> </li>-->
                <!--<ul class="sub-menu collapse" id="performance">
                  <li><a href="#">Overview</a></li>
                  <li><a href="#">Growth Opportunities</a></li>
                  <li><a href="#">Reports</a></li>
                </ul>-->
                <li> <a href="<?php echo base_url();?>seller/promotions"><i class="fa fa-upload" aria-hidden="true"></i> Promotions </a> </li>
                
                <!--<li> <a href="#"> <i class="fa fa-user fa-lg"></i> Profile </a> </li>
          <li> <a href="#"> <i class="fa fa-users fa-lg"></i> Users </a> </li>-->
              </ul>
            </div>
          </div>
        </div>