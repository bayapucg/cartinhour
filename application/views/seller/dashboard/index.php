<style type="text/css">
  
button {
  background: none;
  border: 0;
  box-sizing: border-box;
  margin: 1em;
  padding: 1em 2em;
  box-shadow: inset 0 0 0 2px #f45e61;
  color: #f45e61;
  font-size: inherit;
  font-weight: 700;
  position: relative;
  vertical-align: middle;
}
button::before, button::after {
  box-sizing: inherit;
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
}

.draw {
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
}
.draw::before, .draw::after {
  border: 2px solid transparent;
  width: 0;
  height: 0;
}
.draw::before {
  top: 0;
  left: 0;
}
.draw::after {
  bottom: 0;
  right: 0;
}
.draw:hover {
  color: #60daaa;
}
.draw:hover::before, .draw:hover::after {
  width: 100%;
  height: 100%;
}
.draw:hover::before {
  border-top-color: #60daaa;
  border-right-color: #60daaa;
  -webkit-transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
  transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
}
.draw:hover::after {
  border-bottom-color: #60daaa;
  border-left-color: #60daaa;
  -webkit-transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
  transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
}
.buttons {
  isolation: isolate;
}

h1 {
  font-weight: 300;
  font-size: 2.5em;
}







.content
{
  background: white;
  padding: 2px;
  text-align: center;
  text-transform: uppercase;
}
</style>

<div class="col-md-9 mar_t100">
    <!-- <p style="border:2px solid #ddd;color: #006a99;padding:10px;font-size: 18px; " class="pull-right"></p> -->
        <button class="draw pull-right">Your Id::<?php echo ucfirst($this->session->userdata('seller_rand_id'));    ?></button>
          <div class="bdy_ser">
            <ul class="add_lsit">
              <li><a href="<?php echo base_url();?>seller/mystore"><img src="<?php echo base_url(); ?>assets/seller/images/sto_1.png" /></a> </li>
              <li class="add_sto"><a href="<?php echo base_url();?>seller/personnel_details"><img src="<?php echo base_url(); ?>assets/seller/images/sto_2.png" /></a> </li>
              <li><a href="<?php echo base_url();?>seller/products/create"><img src="<?php echo base_url(); ?>assets/seller/images/sto_3.png" /></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--body end here --> 