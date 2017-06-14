<?php

defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Seller_adddetails.php');

class Adddetails extends Seller_adddetails{

	public function __construct() {
		parent::__construct();
    $this->load->model('seller/adddetails_model');
	$this->load->model('seller/products_model');
    $this->load->model('seller/sellercat_model');
}

	 public function index() {	
	 
	  $this->load->view('seller/layouts/header');
	  $this->load->view('seller/adddetails/index');
	}
 
  //store 
	public function updatebasicdetails()
	{  
		$data = array(

		'seller_name' => $this->input->post('seller_name'),
		'seller_email' => $this->input->post('seller_email'),
		'seller_address' => $this->input->post('seller_address'),
		'created_at'  => date('Y-m-d H:i:s'),
		'updated_at'  => date('Y-m-d H:i:s')

		);
   //echo '<pre>';print_r($data);exit;
		$res=$this->adddetails_model->insertseller_basic($data);
		if(count($res)>0)
		  {
			$this->session->set_flashdata('sucess','personal data successfully added');
			return redirect('seller/adddetails/categories');
		  }else{
			  
			 $this->session->set_flashdata('error','Some error are occured.');
			return redirect('seller/adddetails/updatebasicdetails'); 
		  }


    }

	public function categories() {	 

		$data['getcat'] = $this->products_model->getcatdata();
		//echo '<pre>';print_r($data);exit;
		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/sellercategory', $data);

	}
	public function updateseeler_details()
	{  

			$data = array(
			'seller_id' => $this->session->userdata('seller_id'),
			'seller_category_id'=> $this->input->post('seller_cat'),
			);
			$post=$this->input->post();
			echo '<pre>';print_r($post);exit();
			$res=$this->adddetails_model->insertseller_cat($data);
			if(count($res)>0)
			{
			$this->session->set_flashdata('success','category details updated');
			return redirect('seller/adddetails/personaldetails');
			}


    }
	public function personaldetails()
	{  

		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/personaldetails');


    }
	 public function updatepersonaldetails()
  {  

echo "erwer";exit;
   $data = array(
    'seller_id' => $this->session->userdata('seller_id'),
    'seller_bank_account' => $this->input->post('bank_account'), 
    'seller_adhar' => $this->input->post('aadhaar_card'),
    'seller_pan_card' => $this->input->post('pan_card'),    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
   //echo '<pre>';print_r($data);exit;
    $result=$this->personaldetails_model->insertseller_personal($data);
   
    if(count($result)>0)
      {

        $this->session->set_flashdata('succes','');

        return redirect('seller/success');

      }


    }


}