 <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-users" aria-hidden="true"></i>Send Rep</h3>
         <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>admin/dashboard">Home</a></li>
            <li><i class="fa fa-users" aria-hidden="true"></i>Contact US</li>
           <!-- <li><i class="fa fa-square-o"></i>Starters</li>-->
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">Send Rep</header>
            <div class="panel-body">
              <form role="form" action="<?php echo base_url(); ?>admin/contactus/send" method="post" name="fromemail">

              <div><?php echo $this->session->flashdata('message');?></div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="c_email" id="c_email" value="<?php if(isset($contacts->email)) { echo $contacts->email; } else { echo set_value('email'); }?>" class="form-control" disabled>
                </div>
                <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Message</label>
                  <textarea class="form-control" rows="5" name="message_send"></textarea>
                      <span style="color:red"> <?php echo form_error('message_send'); ?> </span>
                </div>
               
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-primary" name="fromemail">Submit</button>
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



