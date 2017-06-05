<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends MY_Model 

{

	protected $_table="contactus";
	protected $primary_key="id";
	protected $soft_delete = FALSE;
    public $before_create = array( 'created_at', 'updated_at' );
    public $before_update = array( 'updated_at' );
	public function __construct()

	{

	parent::__construct();


	}

	public function search(){

    $match = $this->input->post('search');
  $this->db->like('first_name',$match);
  $query = $this->db->get('contactus');
  return $query->result();

}


	
}


	