 
<div class="content-wrapper mar_t_con">
  <section class="content ">
        <!--  <button class="draw pull-right">Your Id::<?php echo ucfirst($this->session->userdata('seller_rand_id'));?></button>
          -->
          <div class="bdy_ser">
              <!-- <li><a href="<?php echo base_url();?>seller/mystore"><img src="<?php echo base_url(); ?>assets/seller/images/sto_1.png" /></a> </li>
              <li class="add_sto"><a href="<?php echo base_url();?>seller/personnel_details"><img src="<?php echo base_url(); ?>assets/seller/images/sto_2.png" /></a> </li> -->
              <a href="<?php echo base_url();?>seller/products/create" class="btn btn-success pull-right" style="background: #bce1f1;">Add Listing</a>  
          </div>
<div id="dialog1" title="IMPORTANT!">
    <div class="imaindateselleft_padding_right_red">Content here</div>
</div>      
 

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>New Orders</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- monthly calender -->
                                <ul class="menu">
                                        <?php foreach($ordersdata as $order_data){ ?>
                                            <li>
                                               <a href="#" class="border-gray">
                                                    <div class="pull-left">
                                                    <!-- <img src="assets/dist/img/avatar2.png" class="img-thumbnail" alt="User Image"> --></div>
                                                    <h4>Customer Name:<?php  echo $order_data->customer_name; ?></h4>
                                                    <p>Product:<?php  echo $order_data->product_name; ?> 
                                                    </p>
                                                    <span class="label label-success pull-right"><?php  echo $order_data->updated_at; ?></span>
                                                </a>       
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- monthly calender -->
                                    <div class="monthly_calender">
                                        <div class="monthly" id="m_calendar"></div>
                                    </div>
                                </div>
                                 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
                            </div>
                        </div>
                 </section> <!-- /.content -->
             </div>
             </div>
             </div>
             <script type="text/javascript">
               

               $(document).ready(function() {
    var dialogShown = $.cookie('dialogShown');

    if (!dialogShown) {
        $(window).load(function(){
            $( "#dialog1" ).dialog();
            $.cookie('dialogShown', 1);
        });
    }
    else {
        $("#dialog1").hide();
    }
});
             </script>
