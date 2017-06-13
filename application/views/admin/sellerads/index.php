  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
      <div class="row">
       <div class="col-md-7">
           <h3 class="page-header"><i class="fa fa-list" aria-hidden="true"></i>Seller Ads</h3></div>
          <div class="col-md-5 pull-right">
         <form class="navbar-form" action="<?php echo base_url(); ?>admin/sellerads/search" method="post">

          <input class="form-control" placeholder="Search" name="search" type="text">
         <button class="btn btn-default" type="submit">Go!</button>
          </form>
            </div></div>
          <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-list" aria-hidden="true"></i>Seller Ads</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
            <?php echo $this->session->flashdata('msg1'); ?>
              <h3>Seller Ads</h3>
            </header>
            <form role="form" action="<?php echo base_url(); ?>admin/sellerads/insert" method="post">
              <div class="form-group">
                <label for="comment">Send Ads:</label>
                <textarea class="form-control" rows="5" id="comment" name="seller_ads"></textarea>
                <input type="submit" name="send" value="Send Add" class="form-control btn btn-success">
              </div>
            </form>
          </section>
        </div>
      </div>
      <!-- page start--> 
      <!-- page end--> 
    </section>
  </section>
  <!--main content end--> 





     