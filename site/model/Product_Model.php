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
		public function get_select_product($where)
		{
			$where = 'id ="'.$where.'"';
			$data = parent::get_one('product',$where);
			return $data;
		}
		public function get_list_by_catalog($where)
		{
			$where = 'catalog_id ="'.$where.'"';
			$data = parent::get_select('product',$where);
			return $data;
		}
		public function get_list_by_brand($where)
		{
			$where = 'brand_id ="'.$where.'"';
			$data = parent::get_select('product',$where);
			return $data;
		}
		public function search_product($key)
		{
			$data = parent::search('product',$key);
			return $data;
		}
	}
 ?>