<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model 
{

	
	public function __construct()

	{
	parent::__construct();

	}
	
	
	public function getcatsubcat()
	{
		
		$query=$this->db->get('category');
		//return $data->result();
		
		foreach ($query->result() as $category)
        {
            $return[$category->category_id] = $category;

        
      $return[$category->category_id]->subcat = $this->get_subcat($category->category_id);
      

        
    }
		
	if(!empty($return))
    {
    return $return;

	}	
	}
	
	
	public function get_subcat($category_id)
{
    $sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('subcategory');
   $this->db->join('subcategories', 'subcategories.subcategory_id =subcategory.subcategory_id');
    $this->db->where('subcategory.category_id', $category_id);
	$this->db->where('subcategory.seller_id', $sid);
    $query = $this->db->get();
    
    return $query->result();
}

public function getcatdata()
	{
		
		$query=$this->db->get('category');
		return $query->result();
		
	}
	
	
	
	
public function getsellersubcatdata()
{
	
	 $sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('subcategory');
   $this->db->join('subcategories', 'subcategories.subcategory_id =subcategory.subcategory_id');
   $this->db->join('category', 'category.category_id =subcategory.category_id');
	$this->db->where('subcategory.seller_id', $sid);
	$this->db->group_by('category.category_name');
	$this->db->order_by('subcategory.seller_subcategory_id','asc');
    $query = $this->db->get();
    return $query->result_array();
}

public function getsellerdata($cat_id)
{
	
	$sid = $this->session->userdata('seller_id');
	$this->db->select('*');
	$this->db->from('subcategory');
   $this->db->join('subcategories', 'subcategories.subcategory_id =subcategory.subcategory_id');
   $this->db->join('category', 'category.category_id =subcategory.category_id');
   $this->db->where('subcategory.category_id', $cat_id);
	$this->db->where('subcategory.seller_id', $sid);
	//$this->db->group_by('category.category_name');
	$this->db->order_by('subcategory.seller_subcategory_id','asc');
    $query = $this->db->get();
    
    return $query->result();
	
	
	
}


public function seller_cats()
{
	$sid = $this->session->userdata('seller_id');
	$this->db->select('category.category_name')->from('category');
   $this->db->join('seller_categories', 'seller_categories.seller_category_id = category.category_id','left');
	$this->db->where('seller_categories.seller_id', $sid);
    $query = $this->db->get()->result_array();

     // $query = $this->db->query('SELECT category.category_name FROM category JOIN seller_categories ON seller_categories.seller_category_id = category.category_id WHERE seller_categories.seller_id =8');
     //  	return $query->result();
}


public function seller_ads()
{
		
		$query=$this->db->get('seller_all_notifications');
		return $query->result();
		
	}
	
}