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
		public function get_incomplete_transaction()
		{
			$where ='status=0';
			$data = parent::get_select('transaction',$where);
			return $data;
		}
		public function update_transaction($data,$id)
		{
			$where = 'id="'.$id.'"';
			if ($update = parent::update('transaction',$data,$where)) {
				return true;
			}
			return false;
		}
	}
 ?>