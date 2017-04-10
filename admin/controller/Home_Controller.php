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
			// echo $_SERVER['HTTP_REFERER'];
			// $this->model->load('admin');
			
			// print_r($this->model->admin->get_username());
			// $this->library->load('upload');
			// $this->library->upload->upload();
		}
	}
?>