<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adddetails_model extends MY_Model 
{
	protected $_table="seller_basic_details";

	protected $primary_key="seller_basic_id";

	protected $soft_delete = FALSE;

    public $before_create = array( 'created_at', 'updated_at' );

    public $before_update = array( 'updated_at' );
	
		
	public function __construct()

	{
	parent::__construct();

	}
public function getcatdata()
  {
    
    $query=$this->db->get('category');
    return $query->result();
    
  }

  public function insertseller_basic($data)
{
	
	
	$this->db->insert('seller_basic_details',$data);
			//print_r($data); exit;
		return true;	
}


  

}


