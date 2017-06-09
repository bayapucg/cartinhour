<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing_calculator extends CI_Controller {

	public function __construct() {
		parent::__construct();

    $this->load->library('email');
    $this->load->library('encrypt');
    $this->load->model('seller/login_model');
}

 public function index() {
	 
	  
	$data['cihcatdata']  = $this->login_model->getcihcatedata();
	 	
	$this->load->view('seller/header');
  	$this->load->view('seller/pricing',$data);
	$this->load->view('seller/footer');
        //$this->template->render(); 
  }
  
  
  
  function getajaxcih(){
			$cih=$this->input->post('cih_id');
		   	$result=$this->login_model->getcihfeedata($cih);
		   	$sell = 1000;
		   	$show =$result->cih_fee;
		   	$disc = $sell - ($sell * $show / 100);
		   	
		   	//$per = 10;		   	
		   	//$percent = (float)$show . '%';
		   	//$percent = round((float)$show) . '%';
		   	//$we_take = $sell - $show;
		   	$serv_tax = 14.5;		   	
		   	$you_get = $disc - $serv_tax;
		   	$tot =  $sell - $disc + $serv_tax;
		   	//$tot = $you_get - $serv_tax;
			echo  '<div class="form-group">';
              echo '<input class="form-control" type="text" id="cih_fee" name="cih_fee" value="' .$show
              . '"  disabled>';
              echo '</div>';

		// echo '<div disabled id="lol">';
		// 	echo '<table style="border:1px solid #5fcbff;border-radius:10px;margin:0 auto;background-color:#f5f5f5;">';
		// 		echo '<tr>';
		// 			echo '<td style="padding:20px"><span style="color:#ff0000;font-size:18px;">You sell at :</span><br>Rs .1000</td>';
		// 			echo '<td style="padding:20px"><span style="color:#ff0000 ;font-size:18px;">We take:(for ' .$show.' )</span> <br>' .$show.'  of Rs.1000 + 14.5(service tax)= Rs.'.$tot.'</td>';
		// 			echo '<td style="padding:20px"><span style="color:#ff0000;font-size:18px;">You get in bank:</span><br>Rs.'.$you_get.'</td>';
		// 		echo '</tr>';
		// 	echo '</table>';
		// echo '</div>';
		
              	// echo '<div class="panel-group">';
                // echo '<div class="panel panel-success" style = "border-radius: 4px;">';
                  // echo '<div class="panel-body">
                  			// <p style="color:#006a99 ;font-size:18px;font-weight:100;">YOU SELL AT<p>
                  			// <p style="color:#000 ;font-size:17px;">Rs:'.$sell.'<p>
                  		// </div>';
                // echo '</div>';
                // echo '<div class="panel panel-default" style = "border-radius: 4px;">';
                  // echo '<div class="panel-body">
                  			// <p style="color:#006a99 ;font-size:18px;font-weight:600";">WE TAKE<p>
                  				// <p style="color:#000 ;font-size:17px;">' .$show.' Of RS.1000 +14.5(Service Tax) = '.$tot.'</p>
                  		// </div>';
                // echo '</div>';
                // echo '<div class="panel panel-default" style = "border-radius: 4px;">';
                  // echo '<div class="panel-body">
                  			// <p style="color:#006a99;font-size:18px;font-weight:600;">YOU GET IN BANK<p>
                  				// <p style="color:#000 ;font-size:17px;">Rs '.$you_get.'</p>
                  		// </div>';
                // echo '</div>';
              // echo '</div>';


              // echo  '<div class="form-group">';
              // echo 'WE Take<input class="form-control" type="text" id="cih_fee" name="cih_fee" value="' .$show.' Of RS.1000 +14.5(Service Tax)"  disabled>';
              // echo '</div>';

              // echo  '<div class="form-group">';
              // echo 'You Get In BANK<input class="form-control" type="text" id="cih_fee" name="cih_fee" value="' .$you_get. '"  disabled>';
              // echo '</div>';

		 exit;
			}
  
  public function getajaxcih1()
  
  {
	  
	$cih=$this->input->post('cih1_id');
		   $result=$this->login_model->getcihfeedata($cih);
			
			echo  '<div class="form-group san_sle">';
              echo '<input class="form-control" type="text" id="cih_fee1" name="cih_fee1" value="' .$result->cih_fee. '"    disabled>';
              echo '</div>';
		 exit;  
	  
	  
	  
	  
	  
  }
  
public function getreferalfee()
{

	$product_price=$this->input->post('product_price');
	$cih_fee1=$this->input->post('cih_fee1');
	
	$ref = str_replace("%", "", $cih_fee1);
	
	$result12 = ($product_price * $ref)/100;
    
	if ($product_price > 1000) {
		
		$closing_price = 20;
	}
else
{
	$closing_price = 10;
	
	
}
         echo '<h5>CIH Fee: '.$result12.'</h5>';
          echo  '<h5>Closing Fee: '.$closing_price.' </h5>';
		  echo '<input type="hidden" id="productcih_fee" name="productcih_fee" value="'.$result12.'">';
		  echo '<input type="hidden" id="closing_fee" name="closing_fee" value="'.$closing_price.'">';
		  echo '<div class="line">&nbsp;</div>';
		  
exit;  

}	
  
 public function shippingcharge()
  {
	$product_weight=$this->input->post('product_weight');
	
	$product_price=$this->input->post('product_price');
	
	$closing_fee=$this->input->post('closing_fee');
	
	$productcih_fee=$this->input->post('productcih_fee'); 

    //$cih_fee1=$this->input->post('cih_fee1');	
	  
	
$result=$this->login_model->getshippingcharge($product_weight);	

$result2 = $result->shipping_charges;

$delresult=$this->login_model->getdeliveryfee();

$servicedelfee = $delresult->service_fee;

$ref12 = str_replace("%", "", $servicedelfee);

$delivery = ($product_price * $ref12)/100;
$shippingcharge = $delivery + $result2;

$total = $productcih_fee + $closing_fee + $shippingcharge;

$servicetax = ($total * 15)/100;

$totalcharges = $total + $servicetax;

$youmake = $product_price - $totalcharges;

          echo '<h5>Shipping Charges: '.$result2.'</h5>';
          echo  '<h5>Delivery Service Fee:'.$delivery.'@'.$servicedelfee.' </h5>';
		  echo '<div class="line">&nbsp;</div>';
		  echo  '<h5>CIH+Closing+Shipping: '.$total.' </h5>';
		  echo  '<h5>Service Tax: '.$servicetax.'@15%</h5>';
	      echo  '<h5>Total Charges: '.$totalcharges.' </h5>';
		  echo  '<h5>Total You Make: '.$youmake.' </h5>';
		  echo '<input type="hidden" id="youmake" name="youmake" value="'.$youmake.'">';
		  
	  exit;
	  
  }
  
  public function getajaxprofit()
  
  {
	 $you_make=$this->input->post('youmake');
$actual_price=$this->input->post('actual_price');

$result = $you_make - $actual_price; 

echo '<h5>Your Profit: '.$result.'</h5>';
	  
	  exit;
  }
  
  
}