 <!--main content start-->  <section id="main-content">    <section class="wrapper">      <div class="row">        <div class="col-lg-12">          <h3 class="page-header"><i class="fa fa-users" aria-hidden="true"></i>Add Subcategory</h3>         <ol class="breadcrumb">            <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>            <li><i class="fa fa-users" aria-hidden="true"></i>Subcategories</li>           <!-- <li><i class="fa fa-square-o"></i>Starters</li>-->          </ol>        </div>      </div>      <div class="row">        <div class="col-lg-12">          <section class="panel">            <header class="panel-heading"> Add Subcategory </header>            <div class="panel-body">              <form role="form" action="<?php echo base_url(); ?>admin/subcategories/insert" method="post">              <div><?php echo $this->session->flashdata('message');?></div>			  <div class="form-group nopaddingRight col-md-7">                  <label for="exampleInputPassword1">Select Category</label>                  <select class="form-control m-bot15" id="category_id" name="category_id">                    <option value="">Select Category</option>					 <?php foreach($categoriesdata as $categories_data){ ?>                    <option value="<?php echo $categories_data->category_id ;?>"><?php  echo $categories_data->category_name; ?></option>					 <?php } ?>                  </select>				   <span style="color:red"> <?php echo form_error('category_id'); ?> </span>                </div>                <div class="form-group nopaddingRight col-md-6 san-lg">                  <label for="exampleInputEmail1">Subcategory</label>                  <input type="text" name="subcategory_name" id="subcategory_name" value="<?php echo set_value('subcategory_name'); ?>" class="form-control">                      <span style="color:red"> <?php echo form_error('subcategory_name'); ?> </span>                </div>                               <div class="clearfix"></div>                <button type="submit" class="btn btn-primary">Submit</button>                <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>admin/categories';return false;">Cancel</button>              </form>            </div>          </section>        </div>      </div>      <!-- page start-->       <!-- page end-->     </section>  </section>  <!--main content end--> 