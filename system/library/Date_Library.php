<?php 
	/**
	* 
	*/
	class Date_Library 
	{
		
		function __construct()
		{
			# code...
		}
		public function get_date()
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$data = date('Y-m-d');
			return $data;
		}
	}
 ?>