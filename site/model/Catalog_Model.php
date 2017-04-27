<?php 
	/**
	* 
	*/
	class Catalog_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function get_all_catalog()
		{
			$data = parent::get_all('catalog');
			return $data;
		}
		public function add_catalog($data)
		{
			if ($insert = parent::insert('catalog',$data)) {
				return true;
			}
			return false;
		}
		public function get_select_catalog($where)
		{
			$where = 'id ="'.$where.'"';
			$data = parent::get_one('catalog',$where);
			return $data;
		}
	}

 ?>