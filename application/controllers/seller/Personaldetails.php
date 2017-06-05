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

    $data=$this->input->post();
    unset($data['submit']);
  // echo "<pre>";
  //print_r($_FILES); exit;
    $filename="report_".rand(1000,time());//time();
    $config['upload_path'] ='uploads/reports/';
    $config['allowed_types'] = '*';
    $config['file_name']= $filename;
    $config['overwrite']= FALSE;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $imageDetailArray = array();
    $images=array(); 
    for($i=0; $i<count($_FILES['report_file']['name']); $i++)
    {
    $_FILES['userfile']['name']= $_FILES['report_file']['name'][$i];
    $_FILES['userfile']['type']= $_FILES['report_file']['type'][$i];
    $_FILES['userfile']['tmp_name']= $_FILES['report_file']['tmp_name'][$i];
    $_FILES['userfile']['error']= $_FILES['report_file']['error'][$i];
    $_FILES['userfile']['size']= $_FILES['report_file']['size'][$i];
       $this->upload->do_upload(); 
    $imageDetailArray=$this->upload->data();
    $images=$imageDetailArray['raw_name'].$imageDetailArray['file_ext']; // images names we need to inert into images table 
    }



   $data = array(
    'seller_id' => $this->session->userdata('seller_id'),
    'seller_bank_account' => $this->input->post('bank_account'), 
    'seller_adhar' => $this->input->post('aadhaar_card'),
    'seller_pan_card' => $this->input->post('pan_card'),    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
    $res=$this->personaldetails_model->insertseller_personal($data);
    if($res &&  count($images)>0)
      {
      $img_result=$this->personaldetails_model->insertFiles($images);
      }
    if($res == 1)
      {

        $this->session->set_flashdata('msg2','<div class="alert alert-success text-center" style="color: green;font-size:13px;">successfully. </div>');

        return redirect('seller/dashboard');

      }


    }



}