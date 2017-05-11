<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/seller/Admin_Controller.php');


class Promotions extends Admin_Controller {

	
	public function __construct() {
		parent::__construct();
		
		
		
	}

	public function index()
	{
		
	   
	   
		
		$this->template->write_view('content', 'seller/promotions/index');
		$this->template->render();


	}
	



	
}	
	
	
	?>