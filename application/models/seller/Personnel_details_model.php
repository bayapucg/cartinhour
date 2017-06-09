<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personnel_details_model extends MY_Model 

{

	public function __construct()

	{

	parent::__construct();
	}

public function getlocations()
{
$query = $this->db->get('locations');
return $query->result();
}	


public function getsellersd()
{
$sid= $this->session->userdata('seller_id');
$this->db->where('seller_id',$sid);	
$query = $this->db->get('seller_store_details');
return $query->row();		
}


public function getsellerpd()
{
$sid= $this->session->userdata('seller_id');
$this->db->where('seller_id',$sid);	
$query = $this->db->get('seller_personal_details');
return $query->row();		
}


public function getsellerbd()
{
$sid= $this->session->userdata('seller_id');
$this->db->where('seller_id',$sid);	
$query = $this->db->get('sellers');
return $query->row();		
}

 
// store details update
public function updatesd($data)
{
	
$sid= $this->session->userdata('seller_id');	
	
		$this->db->where('seller_id',$sid);
		$query=$this->db->update('seller_store_details',$data);
		return $query; 		
}


// personal details update
public function updatepd($data)
{
	
	$sid= $this->session->userdata('seller_id');		
	$this->db->where('seller_id',$sid);
	$query=$this->db->update('seller_personal_details',$data);
	return $query; 
	
}



public function updatebd($data)
{
	
$sid= $this->session->userdata('seller_id');	
	
$this->db->where('seller_id',$sid);
		$query=$this->db->update('sellers',$data);
		return $query;
}

public function updatebankd($data)
{
	
$sid= $this->session->userdata('seller_id');	
	
$this->db->where('seller_id',$sid);
		$query=$this->db->update('sellers',$data);
		return $query; 		
}

public function insertFiles($images){
	$sid= $this->session->userdata('seller_id');
	for($i=0; $i<count($images); $i++)
	{
	$data=array('seller_id'=>$sid,'file_name'=>$images[$i]);
	$this->db->insert('kyc_reports',$data);
	}
	return true;
	}
}


	