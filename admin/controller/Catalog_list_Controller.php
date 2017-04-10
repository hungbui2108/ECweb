<?php 
	/**
	* 
	*/
	class Catalog_list_Controller extends Controller
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
			$this->model->load('catalog');
			$data = $this->model->catalog->get_all_catalog();
			$array = array('data' =>$data );
			$this->view->load('catalog_list',$array);
		}
	}
 ?>