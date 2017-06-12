 
<div class="content-wrapper mar_t_con">
<section class="content-header">
                     <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                            <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>   
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <h1> Dashboard</h1>
                        <small> Dashboard features</small>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
  <section class="content ">
        <!--  <button class="draw pull-right">Your Id::<?php echo ucfirst($this->session->userdata('seller_rand_id'));?></button>
          -->
          <div class="bdy_ser">
              <!-- <li><a href="<?php echo base_url();?>seller/mystore"><img src="<?php echo base_url(); ?>assets/seller/images/sto_1.png" /></a> </li>
              <li class="add_sto"><a href="<?php echo base_url();?>seller/personnel_details"><img src="<?php echo base_url(); ?>assets/seller/images/sto_2.png" /></a> </li> -->
              <a href="<?php echo base_url();?>seller/products/create" class="btn btn-primary pull-right" style="background: #006a99;">Add Listing</a>  
          </div>
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
                                            <td></td>                                              </tr>
                                        <?php $SNO++; } ?>
                        </tbody>
                    </table>
                </div>
				</div>
			</div>
			<div class="tab-pane fade" id="tab2">
				<div class="panel-body">
					<p><strong>Lorem Ipsum is simply dummy text of the printing and. </strong></p>
					
				</div>
			</div>
		</div>
	</div>
	 <div class="col-sm-6 col-md-4 mar_t40">
		<!-- Default Panel -->
		<div class="panel panel-bd lobidisable">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Default Panel</h4>
				</div>
			</div>
			<div class="panel-body">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
					at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
					as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
				<div class="panel-footer">
					This is standard panel footer
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
       
