<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends MY_Model 

{

	protected $_table="user";
	protected $primary_key="user_id";
	protected $soft_delete = FALSE;
    public $before_create = array( 'created_at', 'updated_at' );
    public $before_update = array( 'updated_at' );
	public function __construct()



	{

	parent::__construct();

	}
//contact us details
public function insertcontact($data)
{
	
	
	$this->db->insert('contactus',$data);
			//print_r($data); exit;

		return true;	
}
	
	


}