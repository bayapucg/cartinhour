<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addcategories_model extends MY_Model 

{

	// protected $_table="category";
	// protected $primary_key="category_id";
	// protected $soft_delete = FALSE;
 //    public $before_create = array( 'created_at', 'updated_at' );
 //    public $before_update = array( 'updated_at' );
	public function __construct()

	{

	parent::__construct();


	}

		public function multi_insert()
		{
			$query = $this->db->query("");
			$query = $this->db->query("");
			$query = $this->db->query("");
		}
}


	