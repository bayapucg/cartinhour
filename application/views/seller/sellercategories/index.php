<!DOCTYPE html>
<html lang="en">
<head>
</head>
<script type="text/javascript">
$(document).ready(function(){
  var maxField = 10; //Input fields increment limitation
  var addButton = $('.add_button'); //Add button selector
  var wrapper = $('.field_wrapper'); //Input field wrapper
  var fieldHTML = '<div class="field_wrapper nopaddingRight col-md-13 san-lg" ><select class="form-control" id="category_id" name="seller_cat[]"><option value="">Select Category</option><?php foreach($getcat as $cat_data){ ?><option value="<?php echo $cat_data->category_id; ?>"><?php echo $cat_data->category_name; ?></option><?php }?></select><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo site_url(); ?>assets/seller/images/remove-icon.png"/></a></div>'; //New input field html 
  var x = 1; //Initial field counter is 1
  $(addButton).click(function(){ //Once add button is clicked
    if(x < maxField){ //Check maximum number of input fields
      x++; //Increment field counter
      $(wrapper).append(fieldHTML); // Add field html
    }
  });
  $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
  });
});
</script>

<div class="" style="margin-bottom:50px;">&nbsp;</div>
<div class="container" >
  <?php echo $this->session->flashdata('msg2'); ?>
  <form  action="<?php echo base_url(); ?>seller/sellercategories/updatesellercat" method="post" >
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Select Your Category</h3>
          <div class="field_wrapper nopaddingRight col-md-6 san-lg" >
                 <select class="form-control" id="category_id" name="seller_cat[]" required="required">
                    <option value="">Select Category</option>
                    <?php foreach($getcat as $cat_data){ ?>
                    <option value="<?php echo $cat_data->category_id; ?>"><?php echo $cat_data->category_name; ?></option>                  
                    <?php }?>
                  </select>
                  <span><a href="javascript:void(0);" class="add_button" title="Add field"> <img src="<?php echo site_url(); ?>assets/seller/images/add-icon.png"> </a></span>
           </div>

          <!--<span style="color:red" id="erroritemcode"></span>-->
      
           </div>

             <input type="submit" class="btn btn-primary " value="Next">
              </form>
        </div>
      </div>
    </div>
</div>
</html>
