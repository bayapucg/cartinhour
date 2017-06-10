  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
      <div class="row">
       <div class="col-md-7">
           <h3 class="page-header"><i class="fa fa-list" aria-hidden="true"></i>Promotions Requests</h3></div>
          <div class="col-md-5 pull-right">
         <form class="navbar-form" action="<?php echo base_url(); ?>admin/promotions/search" method="post">

          <input class="form-control" placeholder="Search" name="search" type="text">
         <button class="btn btn-default" type="submit">Go!</button>
          </form>
            </div></div>
          <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-list" aria-hidden="true"></i>Promotions Requests</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>Promotions Requests</h3>
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
					             <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <!-- <th>Responce</th> -->
                    </tr>
                  </thead>
                  <?php if(!empty($promotions)): ?>
                  <tbody>
                    <?php $count = $this->uri->segment(4, 0);
   foreach($promotions as $promotion){?>
    <tr>
      <td><?=++$count;?></td>
      <td><?php  echo $promotion->first_name ?></td>
	  <td><?php  echo $promotion->email; ?></td>
      <td><?php  echo $promotion->phone_number; ?></td>
      <td><?php  echo $promotion->message; ?></td>
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





     