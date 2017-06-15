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

		'seller_id' => $this->session->userdata('seller_id'),
		'seller_name' => $this->input->post('seller_name'),
		'seller_email' => $this->input->post('seller_email'),
		'seller_address' => $this->input->post('seller_address'),
		'created_at'  => date('Y-m-d H:i:s'),
		'updated_at'  => date('Y-m-d H:i:s')

		);
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
		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/sellercategory', $data);

	}
	public function updateseeler_details()
	{  
			$post=$this->input->post();
			$result = array_unique($post['seller_cat']);
			foreach($result as $subcats){
			$data = array(
			'seller_id' => $this->session->userdata('seller_id'),
			'seller_category_id'=> $subcats,
			'created_at'=> date('Y-m-d h:i:s'),
			'updated_at'=>  date('Y-m-d h:i:s'),
			);
			$res=$this->adddetails_model->insertseller_cat($data);
			
			}
			
			if(count($res)>0)
			{
			$this->session->set_flashdata('success','category details updated');
			return redirect('seller/adddetails/storedetails');
			}


    }
	public function storedetails()
	{  
		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/storedetails');

	}
	public function personaldetails()
	{  
		$this->load->view('seller/layouts/header');
		$this->load->view('seller/adddetails/personaldetails');
	}
	 public function updatepersonaldetails()
	{  

   $post=$this->input->post();
 
   $data = array(
    'seller_bank_account' => $post['bank_account'], 
    'seller_adhar' => $post['aadhaar_card'],
    'seller_pan_card' => $post['pan_card'],    
    'created_at'  => date('Y-m-d H:i:s'),
    'updated_at'  => date('Y-m-d H:i:s')
  
  );
   //echo '<pre>';print_r($data);exit;
    $result=$this->adddetails_model->seller_personal_details($data,$this->session->userdata('seller_id'));
   
    if(count($result)>0)
      {
		$this->session->set_flashdata('succes','');
		return redirect('seller/adddetails/success');

      }


    }
	public function success()
	{  
		$this->template->write_view('content', 'seller/adddetails/success');
		$this->template->render();


    }
	public function seller_storedetails()
	{  
		$post=$this->input->post();
		//echo '<pre>';print_r($_FILES);
		move_uploaded_file($_FILES['timimages']['tmp_name'], "assets/sellerfile/" . $_FILES['timimages']['name']);
		move_uploaded_file($_FILES['tanimages']['tmp_name'], "assets/sellerfile/" . $_FILES['tanimages']['name']);
		move_uploaded_file($_FILES['cstimag']['tmp_name'], "assets/sellerfile/" . $_FILES['cstimag']['name']);

		//echo '<pre>';print_r($post);
			$data = array(
			'seller_id' => $this->session->userdata('seller_id'), 
			'store_name' => $post['storename'], 
			'addrees1' => $post['address1'],    
			'addrees2' => $post['address2'],    
			'pin_code' => $post['pincode'],    
			'other_shops'  =>$post['other_shops'],
			'other_shops_location'  =>$post['other_shops_location'],
			'deliveryes'  =>$post['deliveryes'],
			'weblink'  =>$post['weblink'],
			'tin_vat'  =>$post['tin'],
			'tinvatimage'  =>$_FILES['timimages']['name'],
			'tan'  =>$post['tan'],
			'tanimage'  =>$_FILES['tanimages']['name'],
			'cst'  =>$post['cst'],
			'cstimage'  =>$_FILES['cstimag']['name'],
			'gstin'  =>$post['gstin'],
			 'created_at'  => date('Y-m-d H:i:s'),
			);
			//echo '<pre>';print_r($data);exit;
			$addstoredetails=$this->adddetails_model->storedetails_adding($data);
			
			if(count($addstoredetails)>0)
			{
			$this->session->set_flashdata('success','category details updated');
			return redirect('seller/adddetails/personaldetails');
			}
			//echo '<pre>';print_r($data);exit;


    }


}