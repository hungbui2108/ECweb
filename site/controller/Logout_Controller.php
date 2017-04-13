<?php 
	/**
	* 
	*/
	class Logout_Controller extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!$_SESSION['user']) {
				header('Location:index.php?c=home');
			}
		}
		public function index()
		{
			session_destroy();
			header('Location:index.php?c=home');
		}
	}
?>