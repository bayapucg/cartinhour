<!DOCTYPE html>
<html lang="en">
<head>
</head>

<div class="" style="margin-bottom:50px;">&nbsp;</div>
<div class="container" >
  <?php echo $this->session->flashdata('msg2'); ?>
  <form  action="<?php echo base_url(); ?>seller/adddetails/updatebasicdetails" method="post" >
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Basic Details</h3>
          <div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" placeholder="Name" type="text" id="seller_name" name="seller_name" required="required" >
          </div>         
          <div class="form-group">
            <label class="control-label">Resident address</label>
            <input maxlength="100" type="text" required="required" name="seller_address" class="form-control" placeholder="Enter Resident address" />
          </div>

             <input type="submit" class="btn btn-primary " value="Next">
              </form>
        </div>
      </div>
    </div>
</div>
</html>
