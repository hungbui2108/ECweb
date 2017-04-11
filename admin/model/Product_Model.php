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
		public function get_all_product()
		{
			$data = parent::get_all('product');
			return $data;
		}
		public function get_select_product($where)
		{
			$where = 'id ="'.$where.'"';
			$data = parent::get_one('product',$where);
			return $data;
		}
		public function add_product($data)
		{
			if ($insert = parent::insert('product',$data)) {
				return true;
			}
			return false;
		}
		public function update_product($data,$id)
		{
			$where = 'id="'.$id.'"';
			if ($update = parent::update('product',$data,$where)) {
				return true;
			}
			return false;
		}
		public function delete_product($id)
		{
			$where = 'id='.$id;
			if ($delete = parent::delete('product',$where)) {
				return true;
			}
			return false;
		}
	}
 ?>