<?php

defined('BASEPATH') OR exit('No direct script access allowed');

@include_once( APPPATH . 'controllers/admin/Admin_Controller.php');



class Contactus extends Admin_Controller {



    public function __construct() {

        parent::__construct();

          $this->load->library('email');          
          $this->load->model('admin/contact_model');
       	  
		

   }


   public function index()

    {
       
        //$this->load->view('welcome_message');
        
        $this->load->library('pagination');

          $config = [
           'base_url'   => base_url('admin/subitem/index'),
           'per_page'   => 5,
           'total_rows'  => $this->contact_model->count_by(array()),
           'full_tag_open'  => "<ul class='pagination'>",
           'full_tag_close' => "</ul>",
           'first_tag_open' => '<li>',
           'first_tag_close' => '</li>',
           'last_tag_open'  => '<li>',
           'last_tag_close' => '</li>',
           'next_tag_open'  => '<li>',
           'next_tag_close' => '</li>',
           'prev_tag_open'  => '<li>',
           'prev_tag_close' => '</li>',
           'num_tag_open'  => '<li>',
           'num_tag_close'  => '</li>',
           'cur_tag_open'  => "<li class='active'><a>",
           'cur_tag_close'  => '</a></li>',
          ];

        $this->pagination->initialize($config);

        $result=$this->contact_model->limit($config['per_page'], $this->uri->segment(4) )->get_all();
        $data['contacts'] = $result ;
        $this->template->write_view('content', 'admin/contactus/index', $data);
        $this->template->render();

}


public function search()
    
  {

             $match = $this->input->post('search');
             
                $result1 = $this->contact_model->search($match);
                $result2 = count($result1);
                //echo $result2;exit;
              $this->load->library('pagination');

              $config = [
               'base_url'       =>  base_url('admin/contactus/search'),
               'per_page'       =>  5,
               'total_rows'     =>  $result2,
               'full_tag_open'  =>  "<ul class='pagination'>",
               'full_tag_close' =>  "</ul>",
               'first_tag_open' =>  '<li>',
               'first_tag_close'=>  '</li>',
               'last_tag_open'  =>  '<li>',
               'last_tag_close' =>  '</li>',
               'next_tag_open'  =>  '<li>',
               'next_tag_close' =>  '</li>',
               'prev_tag_open'  =>  '<li>',
               'prev_tag_close' =>  '</li>',
               'num_tag_open'   =>  '<li>',
               'num_tag_close'  =>  '</li>',
               'cur_tag_open'   =>  "<li class='active'><a>",
               'cur_tag_close'  =>  '</a></li>',
              ];

             $this->pagination->initialize($config);
            $result=$this->contact_model->limit($config['per_page'], $this->uri->segment(4) )->search($match);
            $data['contacts'] =  $result;
            $this->template->write_view('content', 'admin/contactus/index',$data);

            $this->template->render();

    }

//edit (send responce)
public function sendrepo()

    {

        $id = $this->uri->segment(4); //controller/function/id

        $result=$this->contact_model->get($id);

        //print_r($result);
        //exit;

        $data['contacts'] = null;

        if($result)

        {
            $data['contacts'] = $result;

        }

        $this->template->write_view('content', 'admin/contactus/send',$data);
        $this->template->render();

    }

    //reply to contact persen


    public function send()
{
  
 if(isset($_POST['fromemail']))
  {  
      
  $to_email=trim($this->input->post('fromemail'));
  $from_email = 'mails@dev2.kateit.in';//change this to yours
  $subject = 'Contact details';
  $message = $this->input->post('message');
  //send mail
  $this->email->set_mailtype("html");
  $this->email->from($from_email);
  $this->email->to($to_email,'Cart in Hour');
  $this->email->subject($subject);
  $this->email->message($message);
  $this->email->send();
  

    $this->session->set_flashdata('verify_msg','Mail Send.');
    $this->session->set_flashdata('err_code',' ');

    //echo "<script>window.location='".base_url()."admin/contactus';</script>";
  } 
  else{
  $this->session->set_flashdata('verify_msg',' ');
  $this->session->set_flashdata('err_code',' ');
  //echo "0";
 echo "<script>window.location='".base_url()."admin/contactus/';</script>";
  }
}


}