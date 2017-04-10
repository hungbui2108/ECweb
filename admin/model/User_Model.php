<?php 
	/**
	* 
	*/
	class User_Model extends DB_Driver
	{
		function __construct()
		{
			parent::__construct();
		}
		public function get_all_user()
		{
			$data = parent::get_all('user');
			return $data;
		}

	}

?>