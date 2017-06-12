<style>
    .add_button {
        border: 0 none;
        left: 440px;
        margin-left: 10px;
        margin-top: 10px;
        position: relative;
        top: -28px;
        vertical-align: text-bottom;
    }
    .remove_button {
        border: 0 none;
        left: 440px;
        margin-left: 10px;
        margin-top: 10px;
        position: relative;
        top: -26px;
        vertical-align: text-bottom;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div> <div class="clearfix"><div class="field_wrapper nopaddingRight col-md-13 san-lg" ><input type="file" class="form-control" name="report_file[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="<?php echo site_url(); ?>assets/seller_admin/images/remove-icon.png"/></a></div></div></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        $(addButton).click(function() { //Once add button is clicked
            if (x < maxField) { //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); // Add field html
            }
        });
        $(wrapper).on('click', '.remove_button', function(e) { //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
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
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!--body start here -->
    <div class="faq_main">
        <div class="container" style="width:100%">

            <div>
                <?php echo $this->session->flashdata('message');?></div>
            <div class="faq head">

                <h1 data-toggle="collapse" data-target="#businessdetails">Basic details</h1>
                <div id="businessdetails" class="collapse">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel-body">
                            <section id="main-content">
                                <section class="content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <!--<header class="panel-heading"> Basic Forms </header>-->
                                                <div class="panel-body">
                                                    <form action="<?php echo base_url(); ?>seller/personnel_details/updatebd" method="post" enctype="multipart/form-data">
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Name</label>
                                                            <input class="form-control" placeholder="Name" type="text" id="seller_name" name="seller_name" value="<?php echo $partsellerbd->seller_name;   ?>">
                                                        </div>
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Email</label>
                                                            <input class="form-control" placeholder="Email" type="text" id="seller_email" name="seller_email" value="<?php echo $partsellerbd->seller_email;   ?>">
                                                        </div>
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Seller Address</label>
                                                            <input class="form-control" placeholder="Type of Category" type="text" id="seller_address" name="seller_address" value="<?php echo $partsellerbd->seller_address;   ?>">
                                                        </div>
                                                        <!-- <div class="form-group nopaddingRight col-md-6 san-lg">
							<label for="exampleInputEmail1">TIN/VAT</label>
							<input class="form-control" placeholder="TIN/VAT" type="text" id="seller_license" name="seller_license" value="<?php echo $partsellerlocationdata->seller_license;   ?>">
							</div>
							<div class="form-group nopaddingRight col-md-6 san-lg">
							<label for="exampleInputEmail1">TAN</label>
							<input class="form-control" placeholder="TAN" type="text" name="seller_tan" id="seller_tan" value="<?php echo $partsellerlocationdata->seller_tan; ?>">
							</div>
							<div class="form-group nopaddingRight col-md-6 san-lg">
							<label for="exampleInputEmail1">GSTIN</label>
							<input class="form-control" placeholder="GSTIN" type="text" name="seller_gstin" id="seller_gstin" value="<?php echo $partsellerlocationdata->seller_gstin; ?>">
							</div> -->
                                                        <div class="clearfix"></div>

                                                        <div style="margin-top: 20px; margin-left: 15px;">
                                                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                                            <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>seller_admin/personnel_details';return false;">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- page start-->
                                    <!-- page end-->
                                </section>
                            </section>
                        </div>
                    </div>
                </div>


                <h1 data-toggle="collapse" data-target="#displaydetails">Store details</h1>
                <div class="demo">
                    <!--<div id="gry" style="display:none">-->
                    <div id="displaydetails" class="collapse">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel-body">
                                <section id="main-content">
                                    <section class="content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <section class="panel">
                                                    <div class="panel-body">
                                                        <form action="<?php echo base_url(); ?>seller/personnel_details/updatestore" method="post" enctype="multipart/form-data" onSubmit="return scvalidateof();">
                                                            <div class="form-group nopaddingRight col-md-6 san-lg">
                                                                <label for="exampleInputEmail1">Business Name</label>
                                                                <input class="form-control" placeholder="Business Name" type="text" id="seller_business_name" name="seller_business_name" value="<?php echo $partsellersd->seller_business_name;?>">
                                                                <!--<span style="color:red" id="erroritemname"></span>-->
                                                            </div>
                                                            <div class="form-group nopaddingRight col-md-6 san-lg">
                                                                <label for="exampleInputEmail1">Number Of Outlets</label>
                                                                <input class="form-control" placeholder="Business Name" type="text" id="out_lets" name="out_lets" value="<?php echo $partsellersd->number_oulets;?>">
                                                                <!--<span style="color:red" id="erroritemname"></span>-->
                                                            </div>
                                                            <div class="form-group nopaddingRight col-md-6 san-lg">
                                                                <label for="exampleInputEmail1">Delivery Own Or Us</label>
                                                                <input class="form-control" placeholder="Business Name" type="text" id="own_us" name="own_us" value="<?php echo $partsellersd->delivery_own_us;?>">
                                                                <!--<span style="color:red" id="erroritemname"></span>-->
                                                            </div>

                                                            <!-- <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Business Display Name</label>
                  <input class="form-control" placeholder="Business Display Name" type="text" id="seller_business_displayname" name="seller_business_displayname" value="<?php echo $partsellerlocationdata->seller_business_displayname;?>">
          <!--<span style="color:red" id="erroritemcode"></span>-->
                                                    </div>

                                                    <div class="form-group nopaddingRight col-md-6 san-lg">
                                                        <label for="exampleInputEmail1">Select Location</label>
                                                        <select class="form-control" id="seller_location" name="seller_location">
                                                            <option value="">Select Location</option>
                                                            <?php foreach($sellerlocationdata as $sellerlocation_data){ ?>
                                                            <option value="<?php echo $sellerlocation_data->location_name; ?>">
                                                                <?php echo $sellerlocation_data->location_name; ?></option>

                                                            <?php }?>
                                                        </select>

                                                        <span style="color:red" id="errorcategory"></span>
                                                    </div>
                                                    <script type="text/javascript">
                                                        for (var i = 0; i < document.getElementById('seller_location').length; i++)

                                                        {

                                                            if (document.getElementById('seller_location').options[i].value == "<?php echo $partsellerlocationdata->seller_location; ?>")

                                                            {

                                                                document.getElementById('seller_location').options[i].selected = true

                                                            }

                                                        }
                                                    </script>
                                                    <div class="form-group nopaddingRight col-md-6 san-lg">
                                                        <label for="exampleInputEmail1">Service time</label>
                                                        <input class="form-control" placeholder="Service time" type="text" name="seller_servicetime" id="seller_servicetime" value="<?php echo $partsellersd->seller_servicetime; ?>">
                                                        <!--<span style="color:red" id="errorcost"></span>-->
                                                    </div>
                                                    <div class="form-group nopaddingRight col-md-6 san-lg">
                                                        <label for="exampleInputEmail1">Other Shop Location</label>
                                                        <input class="form-control" placeholder="Service time" type="text" name="other_shop" id="other_shop" value="<?php echo $partsellersd->orther_shop_location; ?>">
                                                        <!--<span style="color:red" id="errorcost"></span>-->
                                                    </div>
                                                    <div class="form-group nopaddingRight col-md-6 san-lg">
                                                        <label for="exampleInputEmail1">Any Web Link</label>
                                                        <input class="form-control" placeholder="Service time" type="text" name="web_link" id="web_link" value="<?php echo $partsellersd->any_web_link ; ?>">
                                                        <!--<span style="color:red" id="errorcost"></span>-->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div style="margin-top: 20px; margin-left: 15px;">
                                                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                                        <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>seller_admin/personnel_details';return false;">Cancel</button>
                                                    </div>
                                                    </form>
                                            </div>
                                            </section>
                                        </div>
                            </div>
                            <!-- page start-->
                            <!-- page end-->
                            </section>
                            </section>
                        </div>

                    </div>
                </div>
                <!-- panel-group -->
                <h1 class="head_ad" data-toggle="collapse" data-target="#personneldetails">Personnel details</h1>
                <div id="personneldetails" class="collapse">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel-body">
                            <section id="main-content">
                                <section class="content">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">

                                                    <form action="<?php echo base_url(); ?>seller/personnel_details/updatepd" method="post" enctype="multipart/form-data">
                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Bank account</label>
                                                            <input class="form-control" placeholder="Name" type="text" id="bank_account" name="bank_account" value="<?php echo $partsellerpd->seller_bank_account;?>">
                                                        </div>

                                                        <!-- <div class="form-group nopaddingRight col-md-6 san-lg">
                  <label for="exampleInputEmail1">Adhar Card</label>
                  <input class="form-control" placeholder="Mobile Number" type="text" id="adhar_card" name="adhar_card" value="<?php echo $partsellerpd->seller_adhar;?>" >
           </div> -->

                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Pan Card</label>
                                                            <input class="form-control" placeholder="Email" type="text" id="pan_card" name="pan_card" value="<?php echo $partsellerpd->seller_pan_card;   ?>">

                                                        </div>


                                                        <div class="form-group nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">Adhar Number</label>
                                                            <input class="form-control" placeholder="Adhar Number" type="text" name="seller_adhar" id="seller_adhar" value="<?php echo $partsellerpd->seller_adhar; ?>">
                                                        </div>
                                                        <div class="field_wrapper nopaddingRight col-md-6 san-lg">
                                                            <label for="exampleInputEmail1">KYC Documents</label>
                                                            <input class="form-control" type="file" name="report_file[]">
                                                            <!--<span style="color:red" id="erroritemcode"></span>-->
                                                            <!-- <span><a href="javascript:void(0);" class="add_button" title="Add field"> <img src="<?php echo site_url(); ?>assets/seller/images/add-icon.png"> </a></span> -->
                                                        </div>

                                                        <div class="clearfix"></div>

                                                        <div style="margin-top: 20px; margin-left: 15px;">
                                                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                                            <button type="submit" class="btn btn-danger" onclick="window.location='<?php echo base_url(); ?>seller_admin/personnel_details';return false;">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- page start-->
                                    <!-- page end-->
                                </section>
                            </section>

                        </div>
                    </div>
                </div>

                <!--  -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<!--body end here -->