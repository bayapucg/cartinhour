<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Admin_Controller.php');


class Services extends Admin_Controller {

	
	public function __construct() {
		parent::__construct();
		
       // $this->load->library('pagination');
		$this->load->library('email');
		$this->load->model('seller/login_model');
	}

	public function index()
	{
		
	   
	   //$data['sellerlocationdata'] = $this->Personnel_details_model->getlocations();
	  
		
		$this->template->write_view('content', 'seller/services/index');
		$this->template->render();


	}
	

//contact detalis store 
public function details(){
		
  		$data = array(
  	  	'first_name' => $this->input->post('fname'),
  	  	'last_name' => $this->input->post('lname'),
  	  	'email' => $this->input->post('email'),
  	  	'phone_number' => $this->input->post('phone'),
  	  	'message' => $this->input->post('message'),
  	    'created_at'  => date('Y-m-d H:i:s'),
		'updated_at'  => date('Y-m-d H:i:s'),

  	  	);


  	  	$contact = $this->login_model->insertservices($data);

  	  	if($contact == 1)

			{

				$this->session->set_flashdata('msg1','<div class="alert alert-success text-center" style="color: green;font-size:13px;">Thank You! Our team will contact you shortly..</div>');

                  return redirect(base_url('seller/services'));

			}
			else{
				$this->session->set_flashdata('msg1','<div class="alert alert-danger text-center" style="color: green;font-size:13px;">Whoops!</div>');

			}
	}
	
	
	
	
}
	
	
	
	?>