<?php

defined('BASEPATH') OR exit('No direct script access allowed');



 

class Home_model extends CI_Model

{

    function __construct()

    {

        // Call the Model constructor

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
    
	$this->db->select('*');
	$this->db->from('subcategories');
    $this->db->where('category_id', $category_id);
	$this->db->group_by('subcategory_name');
    $query = $this->db->get();
    
    return $query->result_array();
}
	
public function getproductdatacount($cat_id,$subcat_id)
{
	
$this->db->select('*');
	$this->db->from('products');
	$this->db->join('category', 'category.category_id = products.category_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id');
	$this->db->where('category.category_name', $cat_id);
	$this->db->where('subcategories.subcategory_name', $subcat_id);
	$this->db->where('products.item_status', 1);
		$query=$this->db->get();	
	
return $query->num_rows();	
	
}
	
public function getproductdata($cat_id,$subcat_id,$limit,$offset)

{
	$location = $this->session->userdata('location_name');
$this->db->select('*');
	$this->db->from('products');
	$this->db->join('category', 'category.category_id = products.category_id');
    $this->db->join('subcategories', 'subcategories.subcategory_id = products.subcategory_id');
	$this->db->join('sellers', 'sellers.seller_id = products.seller_id');
	$this->db->where('category.category_name', $cat_id);
	$this->db->where('subcategories.subcategory_name', $subcat_id);
	$this->db->where('products.item_status', 1);
	$this->db->where('sellers.seller_location', $location);
	$this->db->limit( $limit, $offset );
		$query=$this->db->get();
		return $query->result();	
	
	
	
	

}	
	
public function getrecentproducts()	
	
	{
	
	$this->db->select('*');
	$this->db->from('products');
	$this->db->where('item_status', 1);
	$this->db->order_by("item_id", "desc");
		
    	$this->db->limit(5);
		$query=$this->db->get();
		return $query->result();
		
		
		
		
		
	}
	
	
public function getsubcatdata($cat_id)

{


$this->db->select('*');
	$this->db->from('subcategories');
	$this->db->join('category', 'category.category_id = subcategories.category_id');
  
	$this->db->where('category.category_name', $cat_id);
	
		$query=$this->db->get();
		return $query->result();	









}	
public function getlocations()

{

$this->db->select('*');
	$this->db->from('locations');
		$query=$this->db->get();
		return $query->result();




}	
	
/*    login and signup      */	


public function checkuserEmail($email)
    {
    $this->db->where('user_email',$email);
	//$this->db->where('user_type',$user_type);
    $query = $this->db->get('user');
    if ($query->num_rows() > 0){
        return 1;
    }
    else{
        return 0;
    }
}

public function userinsert($obj)
{

 $this->db->insert('user',$obj);

    return $this->db->insert_id();


}

public function authenticate($username, $password) {
        //$encrypted_password = ($password);

          $this->db->where('user_email',$username);
      $this->db->where('user_password',$password);
	  //$this->db->where('status', 1);
       $user=$this->db->get('user');
       //print_r($user->result()); exit;
        if (!is_null($user)) {
            return $user->row();

        }
        return FALSE;
    }

public function updatetime($user_id,$updated)
{
$this->db->where('user_id',$user_id);

    $query=$this->db->update('user',$updated);

    return $query; 


}

public function sendEmail($to_email)
    {
		//echo $to_email; exit;
         //$x=$this->encrypt->encode($to_email);
		//$x=str_replace(array('+', '/', '='), array('-', '_', '~'), $x);
        $from_email = 'mails@dev2.kateit.in'; //change this to yours
        $subject = 'Verify Your Email Address';
   		$message = "Dear User,<br>                
		Your Successfully registered<br><br>  Thanks,<br>Cart in hour"; 
        //send mail
		//$this->email->set_mailtype("html");
        $this->email->from($from_email, 'Cart in hour');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();	
		
		
			
    } 
	
public function verifyEmailID($key1)
    {
		//print_r($key1); exit;
        $data = array('status' => 1);
        $this->db->where('user_email', $key1);
        return $this->db->update('user', $data);
    }
	
public function getregstatus($email)
{
	
	$this->db->where('user_email',$email);
		$query = $this->db->get('user');
		//print_r($query->result()); exit;
		return $query->row();
	
	
}	
public function checkEmailExits($email)
	{
	$query = $this->db->query("select * from user where user_email='$email' and status=1");
	//echo  $this->db->last_query();
	return $query->result_array();
	}
	
public function updateforgotstatus($email)
{
	$data = array('forgot_status' => 1);
	$this->db->where('user_email', $email);
     return $this->db->update('user', $data);
	
	
	
}	

public function updateforgotstatus1($email)
{
	$data = array('forgot_status' => 0);
	$this->db->where('user_email', $email);
     return $this->db->update('user', $data);
	
	
	
}	

public function getforgotstatus($email)
{
	
	$this->db->where('user_email',$email);
		$query = $this->db->get('user');
		//print_r($query->result()); exit;
		return $query->row();
	
	
}
	
}
	