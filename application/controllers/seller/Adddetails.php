<?php

defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Seller_adddetails.php');

class Adddetails extends Seller_adddetails{

	public function __construct() {
		parent::__construct();
    $this->load->model('seller/adddetails_model');
}

 public function index() {	 
  //$sid= $this->session->userdata('seller_id');
  //echo $sid;
 
  $this->template->write_view('content', 'seller/adddetails/index');
    $this->template->render();
        //$this->template->render(); 
  }
  //store 
    public function updatebasicdetails()
  {  
   $data = array(
    'seller_id' => $this->session->userdata('seller_id'),
    'seller_name' => $this->input->post('seller_name'),
    'seller_address' => $this->input->post('seller_address'),
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
    $res=$this->adddetails_model->insertseller_basic($data);
    if($res == 1)

      {

        $this->session->set_flashdata('msg2','<div class="alert alert-success text-center" style="color: green;font-size:13px;">successfully. </div>');
        return redirect('seller/storedetails');

      }


    }



}