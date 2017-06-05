<?php

defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Seller_adddetails.php');

class Personaldetails extends Seller_adddetails{

	public function __construct() {
		parent::__construct();
    $this->load->model('seller/personaldetails_model');
}

 public function index() {	 
  //$sid= $this->session->userdata('seller_id');
  //echo $sid;
 
  $this->template->write_view('content', 'seller/personaldetails/index');
    $this->template->render();
        //$this->template->render(); 
  }
  //store 
    public function updatepersonaldetails()
  {  
   $data = array(
    'seller_id' => $this->session->userdata('seller_id'),
    'seller_bank_account' => $this->input->post('bank_account'), 
    'seller_adhar' => $this->input->post('aadhaar_card'),
    'seller_pan_card' => $this->input->post('pan_card'),    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
    $res=$this->personaldetails_model->insertseller_personal($data);
    if($res == 1)

      {

        $this->session->set_flashdata('msg2','<div class="alert alert-success text-center" style="color: green;font-size:13px;">successfully. </div>');

        return redirect('seller/dashboard');

      }


    }



}