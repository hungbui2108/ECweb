<?php 
	/**
	* 
	*/
	class User_Controller extends Controller
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
			$this->model->load('user');
			$data = $this->model->user->get_all_user();
			$array = array('data' => $data );
			$this->view->load('user',$array);
		}
	}
 ?>