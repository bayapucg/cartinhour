
<?php $details=	$this->session->userdata('seller_firsttime');
//echo $details;exit; 
 if($this->session->flashdata('updatpassword')=="Password successfully changed!"){
 ?>
<script>
  $(document).ready(function() {
   $('#view1').trigger("click");
});
</script>
<?php }?>
<div class="card-header cover">
<a href="javascript:void(0)"  style="text-decoration:none;" id="view1" data-toggle="modal"  data-target="#dashboardpopup">
</a>
</div>
	
	<div class="content-wrapper mar_t_con">
	<?php if($this->session->flashdata('welcome')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('welcome');?></div>
					<?php endif; ?>
<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		
		</div>
		<div class="header-title">
			<form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>  
			
			<h1>Dashboard</h1>
			<small>&nbsp;</small>
			<ol class="breadcrumb hidden-xs">
				<li><a href="<?php echo base_url('seller/dashboard');?>"><i class="pe-7s-home"></i> Dashboard</a></li>
				
			</ol>
		</div>
	</section>
  <section class="content ">

        <!--  <button class="draw pull-right">Your Id::<?php echo ucfirst($this->session->userdata('seller_rand_id'));?></button>
          -->
          <div class="bdy_ser">
              <!-- <li><a href="<?php echo base_url();?>seller/mystore"><img src="<?php echo base_url(); ?>assets/seller/images/sto_1.png" /></a> </li>
              <li class="add_sto"><a href="<?php echo base_url();?>seller/personnel_details"><img src="<?php echo base_url(); ?>assets/seller/images/sto_2.png" /></a> </li>
              <!-- <a href="<?php echo base_url();?>seller/products/create" class="btn btn-success pull-right" style="background: #bce1f1;">Add Listing</a>  
          </div> -->
						<!--tabs start-->
      
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 m-b-20">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">New Orders</a></li>
			<li><a href="#tab2" data-toggle="tab">Return Orders</a></li>
		</ul>
		<!-- Tab panels -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="tab1">
				<div class="panel-body">
					 <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Customer Name</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Deliveryboy Id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $SNO=1;
                                    foreach($ordersdata as $order_data){ ?>
                                        <tr >
                                            
                                            <td><?= $SNO; ?></td>
                                            <td><?php  echo $order_data->customer_name; ?></td>
                                            <td><?php  echo $order_data->product_name; ?></td>
                                            <td></td>
                                            <td></td>                                              </tr>
                                        <?php $SNO++; } ?>
							</tbody>
                    </table>
                </div>
				</div>
			</div>
			<div class="tab-pane fade" id="tab2">
				<div class="panel-body">
					<div class="faq_main">

    <div class="container" style="width:100%">
    
      <!-- <h1 class="head_title">My Returns</h1> -->
     <div><?php echo $this->session->flashdata('message');?></div>
      <div class="faq"> 
      <?php //echo '<pre>';print_r($returnitemdata);exit; ?>
	  <?php if(count($returnitemdata)>0){ ?>
		    <?php  foreach($returnitemdata as $returncatitem_data )  {    ?>
        <!--<h1 onclick="document.getElementById('gry').style.display='block'">GETTING STARTED</h1>-->
        <h1 data-toggle="collapse" data-target="#gry<?php echo $returncatitem_data->category_name;   ?>"><?php echo $returncatitem_data->category_name;   ?></h1>
        <div class="demo"> 
          <!--<div id="gry" style="display:none">-->
          <div id="gry<?php echo $returncatitem_data->category_name;   ?>" class="collapse">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php 
            foreach($returncatitem_data->returndocs as $subcategory){?>
            <?php $space =  $subcategory->subcategory_name; 
            
            $nospace = str_replace(' ','',$space);
            
            ?>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne<?php echo $nospace;  ?>">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $nospace;  ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $nospace;  ?>"> <i class="more-less glyphicon glyphicon-plus"></i> <?php echo $subcategory->subcategory_name; ?> </a> </h4>
                </div>
                <div id="collapseOne<?php echo $nospace;  ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $nospace;  ?>">
                  <div class="panel-body">    
          <section class="panel">
                      <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Order Id</th>
                      <!-- <th>Seller Name</th> -->
                      <th>Product Id</th>
                      <th>Product Name</th>
                      <th>Delivery Date</th>
                      <th>Delivery Time</th>
                      <th>Customer Details</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <?php if(!empty($subcategory->returndocs12)): ?>
              <tbody>
                <?php $count = $this->uri->segment(4, 0);
						foreach($subcategory->returndocs12 as $orders_data){?>
                <tr>
                  <td><?= ++$count ?></td>
                  <td><?php  echo $orders_data->order_id; ?></td>
                  <!-- <td><?php  echo $orders_data->seller_name; ?></td> -->
                  <td><?php  echo $orders_data->item_id; ?></td>
                  <td><?php  echo $orders_data->product_name; ?></td>
                 <td><?php  echo $orders_data->delivery_date; ?></td>
                  <td><?php  echo $orders_data->delivery_time; ?></td>

                   <td><table class="table table-bordered qtytable">
                    <tbody>
                      <tr>
                        <th>Name</th>
                        <td><?php  echo $orders_data->customer_name; ?></td>
                      </tr>
                      <tr>
                        <th>Mobile</th>
                        <td><?php  echo $orders_data->customer_phone; ?></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php  echo $orders_data->customer_email; ?></td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td><?php  echo $orders_data->customer_address; ?></td>
                      </tr>
                    </tbody>
                  </table></td>
          <td>  <a href="<?php echo base_url(); ?>seller/orders/delete/<?php  echo $orders_data->order_id; ?>" onclick="return checkDelete('<?php  echo $orders_data->order_id; ?>')"><i class="fa fa-trash-o" style="font-size:18px"></i></a></td>

                
                </tr>

                <?php } ?>

              </tbody>

              <?php else: ?>

              

              <?php endif; ?>
                </table>
                
              </div>
       
          </section>
    


                  </div>
                </div>
              </div>
            <?php }?>
            </div>
          </div>
          <!-- panel-group -->
          
         
        </div>
        <!-- container --> 
       <?php }?>
		<?php }else{?>
		<center>

		<strong>No Records Found</strong>

		</center>

		<?php }   ?>
      
      </div>
    </div>
  
  </div>
					
				</div>
			</div>
		</div>
	</div>
	 <div class="col-sm-6 col-md-4 mar_t40 unpin_hide">
		<!-- Default Panel -->
		<div class="panel panel-bd lobidisable">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Seller Ads</h4>
				</div>
			</div>
			<div class="panel-body">
      <?php foreach($seller_ad as $seller_ads) { ?>
        <p><?php echo $seller_ads->message; ?></p>
        <?php } ?>
				</div>
			</div>
		</div>

</div>
				<!--tabs start-->
                       <!--  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>New Orders</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <ul class="menu">
                                        <?php foreach($ordersdata as $order_data){ ?>
                                            <li>
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                </div>
                                                    <h4>Customer Name:<?php  echo $order_data->customer_name; ?></h4>
                                                    <p>Product:<?php  echo $order_data->product_name; ?> 
                                                    </p>
                                                    <span class="label label-success pull-right"><?php  echo $order_data->updated_at; ?></span>
                                                </a>       
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                                </div>

                            </div>
                        </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="monthly_calender">
                                        <div class="monthly" id="m_calendar"></div>
                                    </div>
                                </div>
                                 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                            </div>
                        </div>-->
                 </section> <!-- /.content -->
             </div>
             </div>
             </div>
         <div class="modal fade" id="dashboardpopup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Successfully completed</h4>
        </div>
        <div class="modal-body">
          <p>Welcome to Your Seller Portal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
