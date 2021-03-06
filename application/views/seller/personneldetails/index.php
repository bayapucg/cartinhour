
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrapValidator.css"/>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrapValidator.js"></script>
<?php 
if($this->session->flashdata('updatemessage')=="Store details updated"){
?>
<script>
$(function(){
  var hash = '#tab3';
  hash && $('ul.nav a[href="' + hash + '"]').tab('show');
});
</script>
<?php  } ?>
<?php 
if($this->session->flashdata('perupdatemessage')=="Personal Details are Updated Successfully"){
	
?>
<script>
$(function(){
  var hash = '#tab4';
  hash && $('ul.nav a[href="' + hash + '"]').tab('show');
});
</script>
<?php  } ?>
<?php 
if($this->session->flashdata('tab')==2){
?>
<script>
$(function(){
	$('#tab2').trigger("click");	
  var hash = '#tab2';
  hash && $('ul.nav a[href="' + hash + '"]').tab('show');
});
</script>
<?php  } ?>
<div class="content-wrapper mar_t_con">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
					</span>
                </div>
            </form>
            <h1>Update</h1>
            <small>Update Your Details</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="<?php echo base_url('seller/dashboard');?>"><i class="pe-7s-home"></i> Home</a>
                </li>
                <li class="active">Update Your Details</li>
            </ol>
        </div>
    </section>
    <!--body start here -->
    <div class="faq_main">
	
	      
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 m-b-20">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab1" data-toggle="tab">Basic details</a></li>
				<li><a href="#tab2" data-toggle="tab" role="tab">your Category</a></li>
				<li ><a href="#tab3" aria-controls="tab3" data-toggle="tab" role="tab">Store details</a></li>
				<li><a href="#tab4" data-toggle="tab">Personal details</a></li>
			</ul>
			<!-- Tab panels -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab1">
					  <section class="panel">
								<?php if($this->session->flashdata('updatemessage')): ?>
								<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button><?php echo $this->session->flashdata('updatemessage');?></div>
								<?php endif; ?>
                                                <div class="panel-body">
                                                    <form  id="basicdetails" name="basicdetails" action="<?php echo base_url('seller/personnel_details/updatebd'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Name</label>
                                                            <input class="form-control" placeholder="Name" type="text" id="seller_name" name="seller_name" value="<?php echo $seller_storedetails['seller_name'];   ?>">
                                                        </div>
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Email</label>
                                                            <input class="form-control" placeholder="Email" type="text" id="seller_email" name="seller_email" value="<?php echo $seller_storedetails['seller_email']   ?>">
                                                        </div>
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Address</label>
                                                            <input class="form-control" placeholder="Type of Category" type="text" id="seller_address" name="seller_address" value="<?php echo $seller_storedetails['seller_address'];   ?>">
                                                        </div> <div class="clearfix"></div>

                                                        <div style="margin-top: 20px; margin-left: 15px;">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                     
                                                    </form> 
													<a type="submit" class="btn btn-danger" href="<?php echo base_url('seller/personnel_details'); ?>">Cancel</a>
												</div>
                                                </div>
                                            </section>
				</div>
				<div class="tab-pane fade" id="tab2">
					<section class="panel">
						<?php if($this->session->flashdata('catupdatemessage')): ?>
						<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button><?php echo $this->session->flashdata('catupdatemessage');?></div>
						<?php endif; ?>
					<div class="panel-body">
							<form id="categories"  name="categories" action="<?php echo base_url('seller/personnel_details/seller_categories'); ?>" method="post" onsubmit="return checkvalidations();" enctype="multipart/form-data">
								<?php //echo '<pre>';print_r($getcat);exit; ?>
								<div><?php //echo '<pre>';print_r($seller_categorudetails);exit; ?>
										<option value="">Select Category</option>
										<?php foreach($seller_categorudetails as $cat_data){ ?>
										<select class="form-control"  id="seller_cat[]" name="seller_cat[]" onchange="categoryid(this.value);" required="required">
										<option value="<?php echo $cat_data['seller_category_id']; ?>"><?php echo $cat_data['category_name']; ?></option>                  
											<?php foreach($getcat as $cat_details){ ?>
											<option value="<?php echo $cat_details['category_id']; ?>"><?php echo $cat_details['category_name']; ?></option>                  

												
											<?php } ?>
										</select><br>
										<?php }?>
								
								</div>
								<div id="CenterForm"></div>
								<div class="form-group">
									<input type="hidden" name="centerCount" id="centerCount" value="0" />
									<button class="btn btn-primary" type="button" onclick="addCenter();"><span>Add More</span></button>
								</div>
								<div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form> 
							<a type="submit" class="btn btn-danger" href="<?php echo base_url('seller/personnel_details'); ?>">Cancel</a>
							</div>
					</div>
					</section>
			</div>
				<div class="tab-pane fade" id="tab3">
				<section class="panel">
								<?php if($this->session->flashdata('storeupdatemessage')): ?>
								<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button><?php echo $this->session->flashdata('storeupdatemessage');?></div>
								<?php endif; ?>
                                                <div class="panel-body">
														 <form id="storedetails"  name="storedetails" action="<?php echo base_url('seller/personnel_details/seller_storedetails'); ?>" method="post" onsubmit="return checkvalidations();" enctype="multipart/form-data">
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Your Store Name (Which displays on our website)</label>
														<input  type="text" class="form-control" name="storename" id="storename" value="<?php echo $seller_storedetails['store_name'];   ?>" class="storename">
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Address Line 1</label>
														<input  type="text"  name="address1" id="address1" value="<?php echo $seller_storedetails['addrees1'];   ?>" class="form-control" />
														</div>


														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Address Line 2</label>
														<input  type="text"  name="address2" id="address2" value="<?php echo $seller_storedetails['addrees2'];   ?>" class="form-control" />
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Pincode</label>
														<input  type="text"  name="pincode" id="pincode"  value="<?php echo $seller_storedetails['pin_code'];   ?>" class="form-control" />
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Other Shops (if any): </label>
														<input  type="text"  name="other_shops" id="other_shops" value="<?php echo $seller_storedetails['other_shops'];   ?>"  class="form-control"  />
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Other Shop Locations</label>
														<input  type="text"  name="other_shops_location" id="other_shops_location" value="<?php echo $seller_storedetails['other_shops_location'];   ?>"  class="form-control"  />
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														<label class="control-label">Delivery service on your Own ?</label>
														<select class="form-control" required="required" name ="deliveryes" id ="deliveryes">
														<option value=""></option>
														<?php if($seller_storedetails['deliveryes']=="1") {?>
														<option value="1" selected>YES</option>	
														<?php }else{ ?>
														<option value="1">YES</option>
														<?php } ?>
														<?php if($seller_storedetails['deliveryes']=="0") {?> 
														<option value="0" selected>No</option>	
														<?php }else{ ?>
														<option value="0">No</option>	
														<?php } ?>
														</select>
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														
														<label class="control-label">Any web link </label>
														<input type="text" id="weblink"  name="weblink" value="<?php echo $seller_storedetails['weblink'];   ?>"  class="form-control"/>
														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
															<label class="control-label">TIN / VAT</label>
															<input type="text"  name="tin" id="tin"  value="<?php echo $seller_storedetails['tin_vat'];   ?>"  class="form-control" />
															<input type="file" title="Upload" name="timimages" onchange="tinpopupimage();" id="timimages" class="form-control" />
															<a onclick="deactive();" href="javascript:void(0)" >replace</a>
															<span id="tinimage"></span>
															<span id="oldtinvatimages">
															<a id="oldtanimage" target="_blank" href="<?php echo site_url('assets/sellerfile/'); ?><?php echo $seller_storedetails['tinvatimage'];?>" ><?php echo $seller_storedetails['tinvatimage'];?></a></span>
															<span style="color:red" id="tinimageerror"></span>

														</div>	
														<div class="form-group nopaddingRight col-md-6 san-lg">
															<label class="control-label">Tan </label>
															<input  type="text"  name="tan" id="tan" value="<?php echo $seller_storedetails['tan'];   ?>" class="form-control"/>
															<input type="file" name="tanimages" id="tanimages" onchange="tanimageuload(this.value)">
															<a onclick="deactive1();" href="javascript:void(0)" >Replace</a>
															<span id="tanimgs"></span>
															<span style="color:red" id="tanimgserror"></span>
															<span id="oldtanimg"><a target="_blank" href="<?php echo site_url('assets/sellerfile/'); ?><?php echo $seller_storedetails['tanimage'];?>" ><?php echo $seller_storedetails['tanimage'];?></a></span>

														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
															<label class="control-label">Cst </label>
															<input  type="text" id="cst"  name="cst" value="<?php echo $seller_storedetails['cst'];   ?>" class="form-control"/>
															<input type="file" id="cstimag" name="cstimag" onchange="cstimageuload(this.value)">
															<a onclick="deactive2();" href="javascript:void(0)" >Replace</a>
															<span id="cstimages"></span>
															<span style="color:red" id="cstimageserror"></span>
															<span id="editcstimage"><a target="_blank" href="<?php echo site_url('assets/sellerfile/'); ?><?php echo $seller_storedetails['cstimage'];?>" ><?php echo $seller_storedetails['cstimage'];?></a></span>

														</div>
														<div class="form-group nopaddingRight col-md-6 san-lg">
														  <label class="control-label">GSTIN</label>
															<input  type="text"  name="gstin" id="gstin" value="<?php echo $seller_storedetails['gstin'];   ?>" class="form-control"  />
														</div>

															 <div class="clearfix"></div>
                                                        <div style="margin-top: 20px; margin-left: 15px;">
                                                            <button type="submit" id="resubmit" class="btn btn-primary">Submit</button>
                                                     
                                                    </form>
													<a type="submit" class="btn btn-danger" href="<?php echo base_url('seller/personnel_details'); ?>">Cancel</a>

														</div>
														
						</section>

				</div>
				<div class="tab-pane fade" id="tab4">
					  <section class="panel">
								<?php if($this->session->flashdata('perupdatemessage')): ?>
								<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button><?php echo $this->session->flashdata('perupdatemessage');?></div>
								<?php endif; ?>
                                                <div class="panel-body">
                                                    <form id="personalidetails"  name="personalidetails" action="<?php echo base_url('seller/personnel_details/personal_details_updatebd'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Bank account</label>
                                                            <input class="form-control" placeholder="Name" type="text" id="bank_account" name="bank_account" value="<?php echo $seller_storedetails['seller_bank_account']?>">
                                                        </div>
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Pan Card</label>
                                                            <input class="form-control" placeholder="Email" type="text" id="pan_card" name="pan_card" value="<?php echo $seller_storedetails['seller_pan_card'];   ?>">

                                                        </div>


                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Adhar Number</label>
                                                            <input class="form-control" placeholder="Adhar Number" type="text" name="seller_adhar" id="seller_adhar" value="<?php echo $seller_storedetails['seller_adhar']; ?>">
                                                        </div>
															 <div class="clearfix"></div>
                                                        <div style="margin-top: 20px; margin-left: 15px;">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                     
                                                    </form> 
													<a type="submit" class="btn btn-danger" href="<?php echo base_url('seller/personnel_details'); ?>">Cancel</a>
												</div>
												</div>
                                                </div>
                                            </section>
				</div>
			</div>
		</div>
		
	</div>
	
	
	
    </div>
</div>
</div>
</div>
</div>
</div>

<!--body end here -->


<script type="text/javascript">

function addCenter() 
    {
		var cCount = document.getElementById('centerCount').value;
        var val = Number(cCount) + 1;
        document.getElementById('centerCount').value= val;
        //alert(val);
        var toDiv = document.getElementById("CenterForm");
        var div = document.createElement('div');
        div.id = 'mainForms'+val;
        div.innerHTML = '<div class="form-group" id="CenterForm"><div class="field_wrapper nopaddingRight col-md-5 san-lg pos_r" data-plugin="inputGroupFile"><select class="form-control"  id="seller_cat[]" name="seller_cat[]" required="required"><option value="">Select Category</option><?php foreach($getcat as $cat_data){ ?><option value="<?php echo $cat_data['category_id']; ?>"><?php echo $cat_data['category_name']; ?></option><?php }?></select></div></div><button class="btn btn-primary" type="button" onclick="removeCenterRow(this);"><span>Remove File</span></button>';
        toDiv.appendChild(div);
        var divclear = document.createElement('div');
        divclear.className = 'clear';
        divclear.innerHTML = '&nbsp;';
        div.appendChild(divclear);
    }
	function removeCenterRow(input) {
    document.getElementById('CenterForm').removeChild( input.parentNode );
}
$('#timimages').hide();
$('#tanimages').hide();
$('#cstimag').hide();

document.getElementById('timimages').onchange = uploadOnChange;

function uploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
        filename = filename.substring(lastIndex + 1);
    }
	$('#oldtanimage').hide();
	jQuery(tinimageerror).html('');
    document.getElementById("tinimage").innerHTML  = filename;
	document.getElementById("resubmit").disabled = false; 
	
}

document.getElementById('tanimages').onchange = tanuploadOnChange;

function tanuploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
        filename = filename.substring(lastIndex + 1);
    }
	$('#oldtanimg').hide();
	jQuery('#tanimgserror').html('');
    document.getElementById("tanimgs").innerHTML  = filename;
	document.getElementById("resubmit").disabled = false; 
	
}
document.getElementById('cstimag').onchange = cstuploadOnChange;

function cstuploadOnChange() {
    var filename = this.value;
    var lastIndex = filename.lastIndexOf("\\");
    if (lastIndex >= 0) {
        filename = filename.substring(lastIndex + 1);
    }
	$('#editcstimage').hide();
	jQuery('#cstimageserror').html('');
    document.getElementById("cstimages").innerHTML  = filename;
	document.getElementById("resubmit").disabled = false; 
	
}


function deactive(id){
	$('#timimages').trigger("click");	
}
function deactive1(id){
	$('#tanimages').trigger("click");	
}
function deactive2(id){
	$('#cstimag').trigger("click");	
}


 function checkvalidations(){
	 var fup = document.getElementById('timimages');
		var fileName = fup.value;
		var ext1 = fileName.substring(fileName.lastIndexOf('.') + 1);

		if(ext1 !=''){
		if(ext1 == "docx" || ext1 == "doc" || ext1 == "pdf" || ext1 == "xlsx" || ext1 == "xls")
		{
		jQuery('#timimageserrormsg').val(1);
		jQuery(tinimageerror).html('');
		} else{
		jQuery('#timimageserrormsg').val(0);
		jQuery('#tinimageerror').html('Uploaded file is not a valid. Only docx,doc,pdf,xlsx,pdf files are allowed');
		return false;
		}
		}
		var fup1 = document.getElementById('tanimages');
		var fileName1 = fup1.value;
		var ext2 = fileName1.substring(fileName1.lastIndexOf('.') + 1);

		if(ext2 !=''){
		if(ext2 == "docx" || ext2 == "doc" || ext2 == "pdf" || ext2 == "xlsx" || ext2 == "xls")
		{
		jQuery('#timimageserrormsg').val(1);
		jQuery('#tanimgserror').html('');
		} else{
		jQuery('#timimageserrormsg').val(0);
		jQuery('#tanimgserror').html('Uploaded file is not a valid. Only docx,doc,pdf,xlsx,pdf files are allowed');
		return false;
		}
		}
		var fup3 = document.getElementById('cstimag');
		var fileName2 = fup3.value;
		var ext3 = fileName2.substring(fileName2.lastIndexOf('.') + 1);

		if(ext3 !=''){
		if(ext3 == "docx" || ext3 == "doc" || ext3 == "pdf" || ext3 == "xlsx" || ext3 == "xls")
		{
		jQuery('#timimageserrormsg').val(1);
		jQuery('#cstimageserror').html('');
		} else{
		jQuery('#timimageserrormsg').val(0);
		jQuery('#cstimageserror').html('Uploaded file is not a valid. Only docx,doc,pdf,xlsx,pdf files are allowed');
		return false;
		}
		}
		return true;
 }
 $(document).ready(function() {
    $('#categories').bootstrapValidator({
       
        fields: {
			  'seller_cat[]': {
              validators: {
					 notEmpty: {
                        message: 'Please select a Category'
                    }
                }
            }
            
		
        }
    });
});
$(document).ready(function() {
    $('#storedetails').bootstrapValidator({
       
        fields: {
			storename: {
              validators: {
					notEmpty: {
						message: 'Store Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Store Name can only consist of alphanumaric, space and dot'
					}
                }
            },
            address1: {
               validators: {
				notEmpty: {
						message: 'Address Line 1 is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address Line 1 wont allow <> [] = % '
					}
            
			}
            },
			address2: {
               validators: {
				notEmpty: {
						message: 'Address Line 2 is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address Line 2 wont allow <> [] = % '
					}
            
			}
            },
			pincode: {
               validators: {
				notEmpty: {
						message: 'Pincode is required'
					},
					regexp: {
					regexp:  /^[0-9]{6}$/,
					message:'Pincode must be 6 digits'
					}
            
			}
            },
			deliveryes: {
               validators: {
				notEmpty: {
					message: 'Please select a Delivery service'
				}
			   }
            
			},
			weblink: {
               validators: {
				notEmpty: {
					message: 'Weblink is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Weblink can only consist of alphanumaric, space and dot'
				}
            
			}
            },
			tin: {
               validators: {
				notEmpty: {
					message: 'Tin is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Tin can only consist of alphanumaric, space and dot'
				}
            
			}
            },
			tan: {
               validators: {
				notEmpty: {
					message: 'Tin is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Tin can only consist of alphanumaric, space and dot'
				}
            
			}
            },
			cst: {
               validators: {
				notEmpty: {
					message: 'Cst is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Cst can only consist of alphanumaric, space and dot'
				}
            
			}
            },
			gstin: {
               validators: {
				notEmpty: {
					message: 'GSTIN is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' GSTIN can only consist of alphanumaric, space and dot'
				}
            
			}
            }
            
		
        }
    });
});
</script>
  
<script type="text/javascript">



$(document).ready(function() {
    $('#basicdetails').bootstrapValidator({
       
        fields: {
			seller_name: {
              validators: {
					notEmpty: {
						message: 'Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
                }
            },
            seller_email: {
               validators: {
				notEmpty: {
					message: 'Email is required'
				},
				regexp: {
				regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
				message: 'Please enter a valid email address. For example johndoe@domain.com.'
				}
            
			}
            },
			seller_address: {
               validators: {
				notEmpty: {
					message: 'Address Line is required'
				},
				regexp: {
				regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
				message: 'Address Line wont allow <>[]'
				}
            
			}
            }
            
		
        }
    });
});

$(document).ready(function() {
    $('#personalidetails').bootstrapValidator({
       
        fields: {
			bank_account: {
              validators: {
					notEmpty: {
						message: 'Bank Account is required'
					},
                   regexp: {
					regexp:  /^[0-9]{9,16}$/,
					message:'Bank Account  must be 9 to 16 digits'
					}
                }
            },
            seller_adhar: {
               validators: {
				notEmpty: {
					message: 'Aadhar Number is required'
				},
				stringLength: {
								min: 12,
								message: 'Aadhar Number must be 12 digits'
							},
				regexp: {
				regexp: /^[0-9]+$/,
				message: ' Aadhar Number can only consist of digits'
				}
            
			}
            },
			pan_card: {
               validators: {
				notEmpty: {
					message: 'Pan Card Number is required'
				},
				regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Pan Card Number can only consist of alphanumaric, space and dot'
				}
            
			}
            }
            
		
        }
    });
});


</script>