 <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-users" aria-hidden="true"></i>Seller Notifications</h3>
         <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i>Subcategories</li>
           <!-- <li><i class="fa fa-square-o"></i>Starters</li>-->
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">Seller Notifications</header>
            <div class="panel-body">
              <form role="form" action="<?php echo base_url(); ?>admin/request/store" method="post">

              <div><?php echo $this->session->flashdata('message');?></div>
			  <div class="form-group nopaddingRight col-md-7">
                  <label for="exampleInputPassword1">Select Seller</label>
                  <select class="form-control m-bot15" id="request_id" name="request_id">
                    <option value="">Select Seller</option>
					 <?php foreach($request as $requests){ ?>
                    <option value="<?php echo $requests->seller_id ;?>"><?php  echo $requests->seller_name; ?></option>
					 <?php } ?>
                  </select>
				   <span style="color:red"> <?php echo form_error('request_id'); ?> </span>
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Message</label>
                  <!-- <input type="text" name="subcategory_name" id="subcategory_name" value="<?php echo set_value('subcategory_name'); ?>" class="form-control"> -->
                  	<textarea name="message" id="message" class="form-control"></textarea>
                      <span style="color:red"> <?php echo form_error('message'); ?> </span>
                </div>

               
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>admin/dashboard';return false;">Cancel</button>
              </form>
            </div>
          </section>
        </div>
      </div>
      <!-- page start--> 
      <!-- page end--> 
    </section>
  </section>
  <!--main content end--> 



