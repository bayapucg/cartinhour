<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/admin/Admin_Controller.php');

class Request extends Admin_Controller {





  public function __construct() {

		parent::__construct();
		$this->load->model('admin/sellers_model');
		$this->load->model('admin/request_model');
	}
	public function index()

	{
			$result=$this->sellers_model->get_all();
			$data['request'] =  $result;

			$this->template->write_view('content', 'admin/request/index',$data);
			$this->template->render();

	}

	public function store(){
   

      $data = array(
	     'seller_id' => $this->input->post('request_id'),
        'message' => $this->input->post('message'),
        );
    //print_r($data); exit;
    $res=$this->request_model->insert($data);
        if($res)
            {       
                    $this->prepare_flashmessage(" Successfully Inserted..", 0);
                   return redirect('admin/request');                
            } else

            {

                $this->prepare_flashmessage("Failed to Insert..", 1);
                return redirect('admin/request');
            }
   }


}
