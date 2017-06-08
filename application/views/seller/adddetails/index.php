<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
.process-step .btn:focus{outline:none}
.process{display:table;width:100%;position:relative}
.process-row{display:table-row}
.process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
.process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
.process-step{display:table-cell;text-align:center;position:relative}
.process-step p{margin-top:4px}
.btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%}
#mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: 750px;
  height: 300px;
  padding: 10px;
  background-color: #ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 0px;
  width: 250px;
  left: 250px;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#details").click(function(){
        $("#error_stepone").addClass("btn-danger");
        $("#error_p").addClass("text-danger"); 
        $("#error_stepone").removeClass("btn-info");       
    });
});
</script><script type="text/javascript">
  $(document).ready(function() {  

var id = '#dialog';
  
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
  
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500); 
$('#mask').fadeTo("slow",0.9);  
  
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
  
//transition effect
$(id).fadeIn(2000);   
  
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
  
});
</script>
<div class="navigation_main">
    <nav class="navbar navbar-inverse hm_nav">
      <div class="">
        <div class="navbar-header logo_style" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">
      <img  src="<?php echo base_url(); ?>assets/seller/images/logo.png" class="img-responsive" /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
				<h4> Dummy content</h4>
          
          </ul>
         
          
        </div>
      </div>
    </nav>
  </div>
<div class="" style="margin-bottom:50px;">&nbsp;</div>

<div class="container">
 <div class="row">
 
  <div class="process">
   <div class="process-row nav nav-tabs">
    <div class="process-step" >
     <button type="button" class="btn  btn-info btn-circle" data-toggle="tab" href="#menu1" id="error_stepone"><i class="fa fa-info fa-3x" ></i></button>
     <p class="text-default" id="error_p"><strong>Basic details</strong></p>
    </div>
    <div class="process-step" id="details">
     <button type="button" class="btn  btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x" id="details"></i></button>
     <p><strong>Select your Category</strong></p>
    </div>
    <div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-3x"></i></button>
     <p><strong>Store details</strong></p>
    </div>
	<div class="process-step">
     <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-image fa-3x"></i></button>
     <p><strong>Personal details</strong></p>
    </div>
    
   </div>
  </div>
  
 </div>
</div>
  
<div class="" style="margin-bottom:50px;">&nbsp;</div>
<div class="container " >
  <?php echo $this->session->flashdata('msg2'); ?>
  <form  action="<?php echo base_url(); ?>seller/adddetails/updatebasicdetails" method="post" >
    <div class="row setup-content">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Basic Details</h3><br>
          <div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" placeholder="Name" type="text" id="seller_name" name="seller_name" required="required" >
          </div>
          <div class="form-group">
            <label class="control-label">Email address</label>
            <input class="form-control" placeholder="Email Address" type="Email" id="seller_email" name="seller_email" required="required" >
          </div>         
          <div class="form-group">
            <label class="control-label">Resident address</label>
            <input maxlength="100" type="text" required="required" name="seller_address" class="form-control" placeholder="Enter Resident address" />
          </div>

             <input type="submit" class="btn btn-primary pull-right" value="Next">
              </form>
        </div>
      </div>
    </div>
</div>
<div class="clear-fix mar_t10" ></div>



<div id="boxes">
  <div id="dialog" class="window">
    Your Content Goes Here
    <div id="popupfoot"> <a href="#" class="close agree">I agree</a> | <a class="agree"style="color:red;" href="#">I do not agree</a> </div>
  </div>
  <div id="mask"></div>
</div>
</html>
