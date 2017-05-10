<?php 
	/**
	* 
	*/
	class Transaction_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function insert_transaction($data)
		{
			if ($do = parent::insert('transaction',$data)) {
				return true;
			}
			return false;
		}
		public function get_transaction_desc()
		{
			$data = parent::get_order_desc('transaction','id');
			return $data;
		}
	}
 ?>