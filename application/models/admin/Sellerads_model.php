<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sellerads_model extends MY_Model 

{



	protected $_table="seller_all_notifications";

	protected $primary_key="id";

	protected $soft_delete = FALSE;

    public $before_create = array( 'created_at', 'updated_at' );

    public $before_update = array( 'updated_at' );



	public function __construct()

	{

	parent::__construct();



	}

}