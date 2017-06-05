<?php

defined('BASEPATH') OR exit('No direct script access allowed');

@include_once( APPPATH . 'controllers/admin/Admin_Controller.php');



class Addcategories extends Admin_Controller {



    public function __construct() {

        parent::__construct();

         $this->load->library('email');
          $this->load->library('encrypt');
        //$this->load->model('admin/addcategories_model');

   }



public function index()

    {
       
        //$this->load->view('welcome_message');
        
       

        //$result=$this->categories_model->get_all();
        //$data['addcategoriesdata'] =  $result;
        $this->template->write_view('content', 'admin/addcategories/index');
        $this->template->render();

}


    public function insert()
    {
      $cat_data = array(
        'category_name' => $this->input->post('category_name'),
       
        );
      $subcat_data = array(
        'subcategory_name' => $this->input->post('subcategory_name'),
       
        );
      $subitem_data = array(
        'subitem_name' => $this->input->post('subitem_name'),
       
        );

      $res=$this->addcategories_model->multi_insert($cat_data,$subcat_data,$subitem_data);

      if($res)

            {       
                    $this->prepare_flashmessage(" Successfully Inserted..", 0);
                   return redirect('admin/addcategories');
            } else
            {
                $this->prepare_flashmessage("Failed to Insert..", 1);
                return redirect('admin/addcategories');
            }

    }

}
