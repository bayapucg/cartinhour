<?php



defined('BASEPATH') OR exit('No direct script access allowed');



@include_once( APPPATH . 'controllers/seller/Admin_Controller.php');







class Admin_Controller extends MY_Controller {







	



	public function __construct() {



			parent::__construct();


      $this->load->model('seller/dashboard_model');
		
       $data['catdata'] = $this->dashboard_model->getcatsubcat();
	   
	   $this->template->set_template('seller');
     
        $this->template->write_view('sidebar', 'seller/shared/sidebar',$data);



		$this->template->write_view('header', 'seller/shared/header');



        $this->template->write_view('footer', 'seller/shared/footer');







        if (!current_admin()) {



             return redirect(base_url('seller/login'));



		}



	}



}