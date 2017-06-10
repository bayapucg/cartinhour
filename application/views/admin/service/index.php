  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
      <div class="row">
       <div class="col-md-7">
           <h3 class="page-header"><i class="fa fa-list" aria-hidden="true"></i>Service Requests</h3></div>
          <div class="col-md-5 pull-right">
         <form class="navbar-form" action="<?php echo base_url(); ?>admin/service/search" method="post">

          <input class="form-control" placeholder="Search" name="search" type="text">
         <button class="btn btn-default" type="submit">Go!</button>
          </form>
            </div></div>
          <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-list" aria-hidden="true"></i>Service Requests</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>Service Requests</h3>
            </header>
            <div class="panel-body">  
              <!--  -->
 
             <div class="clearfix"></div>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>S.NO</th>
                      <th>Person Name</th>
                      <th>Phone Number</th>
                      <th>Plan</th>
                      <!-- <th>Responce</th> -->
                    </tr>
                  </thead>
                  <?php if(!empty($service)): ?>
                  <tbody>
                    <?php $count = $this->uri->segment(4, 0);
   foreach($service as $services){?>
    <tr>
      <td><?=++$count;?></td>
      <td><?php  echo $services->seller_name; ?></td>
      <td><?php  echo $services->phone_number; ?></td>
      <td><?php  echo $services->select_plan; ?></td>
    </tr>
    <?php  } ?>

                  </tbody>
                   <?php else: ?>
              <center>
                <strong>No Records Found</strong>
              </center>

              <?php endif; ?>
                </table>
                <center><?= $this->pagination->create_links(); ?></center>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- page start--> 
      <!-- page end--> 
    </section>
  </section>
  <!--main content end--> 





     