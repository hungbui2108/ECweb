
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
		public function get_username($username)
		{
			$where = "name='".$username."'";
			$data = parent::get_select('user',$where);
			return $data;
		}
		public function insert_user($data)
		{
			if ($do = parent::insert('user',$data)) {
				return true;
			}
			return false;
		}

	}

?>