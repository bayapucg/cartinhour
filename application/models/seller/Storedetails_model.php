<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Storedetails_model extends MY_Model 
{
	protected $_table="seller_store_details";

	protected $primary_key="seller_store_id";

	protected $soft_delete = FALSE;

    public $before_create = array( 'created_at', 'updated_at' );

    public $before_update = array( 'updated_at' );
	
		
	public function __construct()

	{
	parent::__construct();

	}

  public function insertseller_store($data)
{
	
	
	$this->db->insert('seller_store_details',$data);
			//print_r($data); exit;
		return true;	
}


  

}


