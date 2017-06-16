<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model 

{

	public function __construct()

	{

	parent::__construct();

	}

 public function authenticate($username, $password) {

        //$encrypted_password = ($password);
 	        $this->db->where('admin_name',$username);
			$this->db->where('admin_password',$password);
			 $user=$this->db->get('admin_users');
       //print_r($user->result()); exit;
        if (!is_null($user)) {
            return $user->row();
        }
        return FALSE;
    }

public function get_data($username, $password)

    {
      //  echo $username.$password;exit;
         $this->db->where('admin_name',$username);
            $this->db->where('admin_password',$password);
             $user=$this->db->get('admin_users');
             return $user->result();

    }
  public function checkEmailExits($email)
	{
	$query = $this->db->query("select * from admin_users where admin_email='$email'");
	//echo  $this->db->last_query();
	return $query->result_array();
	}
	
	function forgot_password($email){
		$this->db->select('*')->from('admin_users');
		$this->db->where('admin_email', $email);
		return $this->db->get()->row_array();
	}
	function update_password($reset_pass){
		$sql1="UPDATE admin_users SET admin_password ='".$reset_pass['cpassword']."'WHERE admin_id = '".$reset_pass['userid']."' AND admin_email='".$reset_pass['email']."'";
		return $this->db->query($sql1);
	}


}