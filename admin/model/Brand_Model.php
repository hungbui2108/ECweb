<?php 
	/**
	* 
	*/
	class Brand_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function get_all_brand()
		{
			$data = parent::get_all('brand');
			return $data;
		}
		public function get_select_brand($array)
		{
			$where = 'catalog_id ="'.$array['catalog_id'].'" AND name="'.$array['brand_name'].'"';
			$data = parent::get_one('brand',$where);
			return $data;
		}
		public function add_brand($data)
		{
			if ($insert = parent::insert('brand',$data)) {
				return true;
			}
			return false;
		}
	}
 ?>