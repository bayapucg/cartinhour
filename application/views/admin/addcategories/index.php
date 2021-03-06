 <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-users" aria-hidden="true"></i>Add Category</h3>
         <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i>Add Categories</li>
           <!-- <li><i class="fa fa-square-o"></i>Starters</li>-->
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading"> Add Category </header>
            <div class="panel-body">
              <form role="form" action="<?php echo base_url(); ?>admin/addcategories/insert" method="post">

              <div><?php echo $this->session->flashdata('message');?></div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" name="category_name" id="category_name" value="<?php echo set_value('category_name'); ?>" class="form-control">
                      <span style="color:red"> <?php echo form_error('category_name'); ?> </span>
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Sub Category</label>
                  <input type="text" name="subcategory_name" id="subcategory_name" value="<?php echo set_value('category_name'); ?>" class="form-control">
                      <span style="color:red"> <?php echo form_error('category_name'); ?> </span>
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Sub Item</label>
                  <input type="text" name="subitem_name" id="subitem_name" value="<?php echo set_value('category_name'); ?>" class="form-control">
                      <span style="color:red"> <?php echo form_error('category_name'); ?> </span>
                </div>

               
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>admin/categories';return false;">Cancel</button>
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



