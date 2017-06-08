<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Admin_Controller.php');


class Personnel_details extends Admin_Controller {

	
	public function __construct() {
		parent::__construct();
		
		//$this->load->model('seller/products_model');
		$this->load->model('seller/Personnel_details_model');
       // $this->load->library('pagination');
		
 	}

	public function index()
	{
			   
	   $data['sellerlocationdata'] = $this->Personnel_details_model->getlocations();
	   $data['partsellersd'] = $this->Personnel_details_model->getsellersd();
	   $data['partsellerpd'] = $this->Personnel_details_model->getsellerpd();
	   $data['partsellerbd'] = $this->Personnel_details_model->getsellerbd();		
		$this->template->write_view('content', 'seller/personneldetails/index', $data);
		$this->template->render();


	}
	
public function updatestore()
{
    $data = array(
	
	
	'seller_business_name' => $this->input->post('seller_business_name'),
	'number_oulets' => $this->input->post('out_lets'),
	'number_oulets' => $this->input->post('out_lets'),
	'seller_location' => $this->input->post('seller_location'),
	'seller_servicetime' => $this->input->post('sellr_servicetime'),
	'delivery_own_us' => $this->input->post('own_us'),
	'orther_shop_location' => $this->input->post('other_shop'),
	'any_web_link' => $this->input->post('web_link')
	
	);


$res=$this->Personnel_details_model->updatesd($data);


if($res)
			{

                 $this->prepare_flashmessage("Display Details are Updated Successfully..", 0);
				return redirect('seller/Personnel_details');
			}
			else
			{

				$this->prepare_flashmessage("Failed to Insert..", 1);
				return redirect('seller/Personnel_details');
			}	
}	

//personal details update
public function updatepd()
{
	$data=$this->input->post();
    unset($data['submit']);

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
		$images[]=$imageDetailArray['raw_name'].$imageDetailArray['file_ext']; // images names we need to inert into images table 
		}
	
	
	 $data = array(
	
	
	'seller_bank_account' => $this->input->post('bank_account'),
	'seller_pan_card ' => $this->input->post('pan_card'),
	'seller_adhar' => $this->input->post('adhar_card')
	
	);


$res=$this->Personnel_details_model->updatepd($data);
if($res &&  count($images)>0)
			{
			$img_result=$this->Personnel_details_model->insertFiles($images);
			}
if($res)
		{
        $this->prepare_flashmessage("Personnel Details are Updated Successfully..", 0);
				return redirect('seller/Personnel_details');
			}
			else
			{
				$this->prepare_flashmessage("Failed to Insert..", 1);
			
			return redirect('seller/Personnel_details');
			}	
}


public function updatebd()
{
	
	
	 $data = array(
	
	
	'seller_name' => $this->input->post('seller_name'),
	'seller_address' => $this->input->post('seller_address'),
	
	);


$res=$this->Personnel_details_model->updatebd($data);
if($res)
		{
		 $this->prepare_flashmessage("Basic Details are Updated Successfully..", 0);
		return redirect('seller/Personnel_details');
			}
			else
			{
				$this->prepare_flashmessage("Failed to Insert..", 1);
				return redirect('seller/Personnel_details');
			}	
	
}


public function updatebankdetails()
{
	
	$data=$this->input->post();
    unset($data['submit']);

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
		$images[]=$imageDetailArray['raw_name'].$imageDetailArray['file_ext']; // images names we need to inert into images table 
		}
	
	$data = array(
	
	
	'seller_bank' => $this->input->post('seller_bank'),
	'seller_pan' => $this->input->post('seller_pan')
	
	);
$res=$this->Personnel_details_model->updatebankd($data);	
	if($res &&  count($images)>0)
			{
			$img_result=$this->Personnel_details_model->insertFiles($images);
			}
			
if($res)
	{
        $this->prepare_flashmessage("Bank Details are Updated Successfully..", 0);
		return redirect('seller/Personnel_details');
			}
			else
			{
				$this->prepare_flashmessage("Failed to Insert..", 1);
				return redirect('seller/Personnel_details');
			}						
	}	
}	
?>