<?php 
	/**
	* 

	*/
	class Product_detail_Controller extends Controller
	{
		public function index()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$product = $this->model->product->get_select_product($id);
			$this->view->load('product',$product);
		}
	}
 ?>