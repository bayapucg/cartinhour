 
  <!--banenr start here -->
  <div class="register">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3">
          <div class="reg_main">
            <h1>Create your Account</h1>
            <hr>
             <form action="<?php echo base_url(); ?>seller/login/insert" method="post"  onSubmit="return sellerinfvalidateof();">
             <?php echo $this->session->flashdata('msg1'); ?>
                
                <div class="col-xs-12 col-md-4 nopaddingright reginput">
                  <label for="ex4">Mobile Number</label>
                  <input class="form-control" id="seller_mobile" name="seller_mobile" type="text">
                <span id="errorphone" style="color:red; font-size: 13px;"></span>
                </div>
              <div class="clearfix"></div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="" id="terms_condition">
                  If you have read and agree to the <a href="<?php echo base_url(); ?>seller_admin/login/tac"" id="tac">Terms and Conditions,</a> please continue</label>
         <div id="errorterms" style="color:red; font-size: 13px;"></div> 
              </div>
        
              <input type="submit" class="btn btn-primary" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--banenr end here --> 
  
 

<script>
  
  function sellerinfvalidateof()

{
var seller_mobile=document.getElementById('seller_mobile');
var terms_condition=document.getElementById('terms_condition');
var phone_validation = /^(?=.*?[1-9])[0-9()-+]+$/ ;
if(seller_mobile.value!=""){

if (!phone_validation.test(seller_mobile.value)) {
document.getElementById('errorphone').innerHTML="Invalid Phone Number";
$("#seller_mobile").focus();
return false;
} 
else{
  document.getElementById('errorphone').innerHTML="";
}
}
else{
document.getElementById('errorphone').innerHTML="Enter the Phone Number";
$("#seller_mobile").focus();
return false;
}
if(!terms_condition.checked){
document.getElementById('errorterms').innerHTML="Accept Terms and Contitions";
return false; 
} 
}
</script>


