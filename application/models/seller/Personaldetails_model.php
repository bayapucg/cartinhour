<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Personaldetails_model extends MY_Model 
{
	protected $_table="seller_personal_details";

	protected $primary_key="seller_personal_id";

	protected $soft_delete = FALSE;

    public $before_create = array( 'created_at', 'updated_at' );

    public $before_update = array( 'updated_at' );
	
		
	public function __construct()

	{
	parent::__construct();

	}

  public function insertseller_personal($data)
{
	
	
	$this->db->insert('seller_personal_details',$data);
			//print_r($data); exit;
		return true;	
}


  

}


