<?php
	/**
	* 
	*/
	class Admin_Model extends DB_Driver
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function get_all_username()
		{
			$data = parent::get_all('admin');
			return $data;
		}
		public function get_username($username)
		{
			$where = "username='".$username."'";
			$data = parent::get_select('admin',$where);
			return $data;
		}
	}
?>