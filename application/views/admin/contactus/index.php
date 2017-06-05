  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
      <div class="row">
       <div class="col-md-7">
           <h3 class="page-header"><i class="fa fa-list" aria-hidden="true"></i>Contact Requests</h3></div>
          <div class="col-md-5 pull-right">
         <form class="navbar-form" action="<?php echo base_url(); ?>admin/contactus/search" method="post">
          <input class="form-control" placeholder="Search" name="search" type="text">
         <button class="btn btn-default" type="submit">Go!</button>
          </form>
            </div></div>
          <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-list" aria-hidden="true"></i>Contact Requests</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>Contact Requests</h3>
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
                      <th>Responce</th>
                    </tr>
                  </thead>
                  <?php if(!empty($contacts)): ?>
                  <tbody>
                    <?php $count = $this->uri->segment(4, 0);
   foreach($contacts as $contact){?>
    <tr>
      <td><?=++$count;?></td>
      <td><?php  echo $contact->first_name ?></td>
	  <td><?php  echo $contact->email; ?></td>
      <td><?php  echo $contact->phone_number; ?></td>
      <td><?php  echo $contact->message; ?></td>
      <td><a href="<?php echo base_url(); ?>admin/contactus/sendrepo/<?php  echo $contact->id; ?>"><i class="fa fa-pencil-square-o" style="font-size:18px">Send</i></a></td>
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





     