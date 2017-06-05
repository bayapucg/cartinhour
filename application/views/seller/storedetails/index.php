<!DOCTYPE html>
<html lang="en">
<head>
</head>

<div class="" style="margin-bottom:50px;">&nbsp;</div>
<div class="container" >
  <?php echo $this->session->flashdata('msg2'); ?>
  <form  action="<?php echo base_url(); ?>seller/storedetails/updatestoredetails" method="post" >
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Store Details</h3>
          <div class="form-group">
            <label class="control-label">Business Name</label>
            <input class="form-control" placeholder="Bussiness Name" type="text" id="business_name" name="business_name" required="required" >
          </div>         
          <div class="form-group">
            <label class="control-label">Seller Location</label>
            <input maxlength="100" type="text" required="required" name="seller_location" class="form-control" placeholder="Enter Your Location" />
          </div>
          <div class="form-group">
            <label class="control-label">Seller Servicetime</label>
            <input maxlength="100" type="text" required="required" name="seller_time" class="form-control" placeholder="Enter Servicetime" />
          </div>
          <div class="form-group">
            <label class="control-label">Other Shop Location</label>
            <input maxlength="100" type="text"  name="other_shop" class="form-control" placeholder="Other Shop Location(Optinal)" />
          </div>
          <div class="form-group">
            <label class="control-label">Any Web Link</label>
            <input maxlength="100" type="text"  name="web_link" class="form-control" placeholder="Any Web Link(Optinal)" />
          </div>

             <input type="submit" class="btn btn-primary " value="Next">
              </form>
        </div>
      </div>
    </div>
</div>
</html>
