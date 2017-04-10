<?php 
	/**
	* 
	*/
	class Brand_list_Controller extends Controller
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
			$this->model->load('brand');
			$data = $this->model->brand->get_all_brand();
			$array = array('data' =>$data );
			$this->view->load('brand_list',$array);
		}
	}
 ?>