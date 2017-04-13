<?php 
	/**
	* 
	*/
	class Product_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function get_best_sale()
		{
			$data = parent::get_order_desc('product','sold_qty');
			return $data;
		}
	}
 ?>