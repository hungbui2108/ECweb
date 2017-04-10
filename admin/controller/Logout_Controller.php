<?php 
	/**
	* 
	*/
	class Logout_Controller extends Controller
	{
		
		public function index()
		{
			session_destroy();
			header('Location: admin.php?c=login');
		}
	}
 ?>