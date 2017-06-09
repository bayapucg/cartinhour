<div class="content-wrapper mar_t_con" >
  <section class="content ">
  
  <div class="faq_main">
   
   
   
   <!-- <div class="container" style="margin-top:30px; width:100%;">
	
      <h1 class="head_title">Call us : 9494422779</h1>
   
   </div> -->


   <form  class=""  method="post" action="<?php echo base_url(); ?>seller/promotions/storepromotions" role="form">
          <div class="messages" id="form-messages"></div>
          <?php echo $this->session->flashdata('msg1'); ?>
          <div class="controls">
            <div class="row mar_t10">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_name">Firstname *</label>
                  <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
             
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_phone">Phone*</label>
                  <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Plz enter your correct phone number ')"
                onchange="try{setCustomValidity('')}catch(e){}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              
              <div class="col-md-12">
                <input type="submit" class="btn btn-primary pull-right" value="Send message">
              </div>
            </div>
          </div>

        </form>
   
  
 
  </div>
     </section>
  </div>

  
  <!--body end here --> 
  