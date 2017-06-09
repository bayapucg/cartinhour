<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adddetails_model extends MY_Model 
{
			
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
	
	// $sid= $this->session->userdata('seller_id');
	// $this->db->where('seller_id',$sid);	
	// $query = $this->db->get('sellers');
	// return $query->row();

	$sid= $this->session->userdata('seller_id');	
$this->db->where('seller_id',$sid);
		$query=$this->db->update('sellers',$data);
		return $query;

	// $this->db->update('sellers',$data);
	// 		//print_r($data); exit;
	// 	return true;	
}


  

}


