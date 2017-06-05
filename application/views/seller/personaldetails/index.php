<!DOCTYPE html>
<html lang="en">
<head>
</head>

<div class="" style="margin-bottom:50px;">&nbsp;</div>
<div class="container" >
  <?php echo $this->session->flashdata('msg2'); ?>
  <form  action="<?php echo base_url(); ?>seller/personaldetails/updatepersonaldetails" method="post" >
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Personal Details</h3>
          <div class="form-group">
            <label class="control-label">Bank Account</label>
            <input class="form-control" placeholder="Enter your Bank Account" type="text" id="bank_account" name="bank_account" required="required" >
          </div>         
          <div class="form-group">
            <label class="control-label">Aadhaar Card</label>
            <input maxlength="100" type="text" required="required" name="aadhaar_card" class="form-control" placeholder="Enter Your Aadhaar Card" />
          </div>
          <div class="form-group">
            <label class="control-label">Personal Pan card</label>
            <input maxlength="100" type="text" required="required" name="pan_card" class="form-control" placeholder="Enter your Pan Card" />
          </div>

             <input type="submit" class="btn btn-primary " value="Next">
              </form>
        </div>
      </div>
    </div>
</div>
</html>
