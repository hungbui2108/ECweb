<?php 
	/**
	* 
	*/
	class Product_delete_Controller extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!isset($_SESSION['username'])) {
				header('Location: admin.php?c=login');
			}
		}
		public function index($id)
		{
			$this->model->load('product');
			if ($do = $this->model->product->delete_product($id)) {
				header('Location:admin.php?c=product_list');
			}
			header('Location:admin.php?c=product_list');
		}
	}
 ?>