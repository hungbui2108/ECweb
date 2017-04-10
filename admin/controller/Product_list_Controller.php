<?php 
	/**
	* 
	*/
	class Product_list_Controller extends Controller
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
			$this->model->load('product');
			$data = $this->model->product->get_all_product();
			$array = array('data' =>$data );
			$this->view->load('product_list',$array);
		}
	}
 ?>