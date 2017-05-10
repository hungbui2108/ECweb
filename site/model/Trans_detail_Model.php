<?php 
	/**
	* 
	*/
	class Trans_detail_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function insert_trans_detail($data)
		{
			if ($do = parent::insert('trans_detail',$data)) {
				return true;
			}
			return false;
		}
	}
 ?>