<?php 
	/**
	* 
	*/
	class Search_Controller extends Controller
	{
		public function index()
		{
			$search = $_POST['search'] ?? '';
			$this->model->load('product');
			$product = $this->model->product->search_product($search);
			$data = array('product'=>$product);
			$this->view->load('search',$data);

		}
	}
?>