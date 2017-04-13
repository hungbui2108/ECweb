<?php 
	/**
	* 
	*/
	class Home_Controller extends Controller
	{
		function __construct()
		{
			parent::__construct();
			if (!isset($_SESSION['username'])) {
				header('Location: admin.php?c=login');
			}
		}
		
		public function index()
		{
			
			$this->view->load('home');
		}
	}
?>