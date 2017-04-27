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
		public function get_brand_by_catalog($where)
		{
			$where = 'catalog_id ="'.$where.'"';
			$data = parent::get_select('brand',$where);
			return $data;
		}
	}
 ?>