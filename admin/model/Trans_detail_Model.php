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
		public function get_select_trans_detail($id)
		{
			$where = 'transaction_id='.	$id;
			$data = parent::get_select('trans_detail',$where);
			return $data;
		}
	}
 ?>