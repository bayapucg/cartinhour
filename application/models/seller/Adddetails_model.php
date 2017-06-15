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
  public function insertseller_cat($data)
	{
		
		$sid= $this->session->userdata('seller_id');	
		$this->db->where('seller_id',$sid);
		$query= $this->db->insert('seller_categories', $data);
		return $query;
	}

	public function insertseller_basic($data)
	{
	 $sid= $this->session->userdata('seller_id');	
	 $this->db->where('seller_id',$sid);
	 $query=$this->db->update('sellers',$data);
	 return $query;

	}
	function seller_personal_details($data,$sid){
		$this->db->where('seller_id',$sid);
    	return $this->db->update("sellers",$data);

	}
	function storedetails_adding($data){
		$this->db->insert('seller_store_details', $data);
		return $insert_id = $this->db->insert_id();

	}
	function setpassword($sid,$data){
		$this->db->where('seller_id',$sid);
    	return $this->db->update("sellers",$data);

	}
	function getseller_details($sid){
		$this->db->select('*')->from('sellers');
		$this->db->where('seller_id', $sid);
		return $this->db->get()->row_array();

	}
	


  

}


