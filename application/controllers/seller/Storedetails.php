<?php

defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Seller_adddetails.php');

class Storedetails extends Seller_adddetails{

	public function __construct() {
		parent::__construct();
    $this->load->model('seller/storedetails_model');
}

 public function index() {	 
  //$sid= $this->session->userdata('seller_id');
  //echo $sid;
 
  $this->template->write_view('content', 'seller/storedetails/index');
    $this->template->render();
        //$this->template->render(); 
  }
  //store 
    public function updatestoredetails()
  {  
   $data = array(
    'seller_id' => $this->session->userdata('seller_id'),
    'seller_business_name' => $this->input->post('business_name'),
    'seller_location' => $this->input->post('seller_location'),
    'seller_servicetime' => $this->input->post('seller_time'),
    'orther_shop_location' => $this->input->post('other_shop'),
    'any_web_link' => $this->input->post('web_link'),    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
    $res=$this->storedetails_model->insertseller_store($data);
    if($res == 1)

      {

        $this->session->set_flashdata('msg2','<div class="alert alert-success text-center" style="color: green;font-size:13px;">successfully. </div>');

        return redirect('seller/personaldetails');

      }

    }



}