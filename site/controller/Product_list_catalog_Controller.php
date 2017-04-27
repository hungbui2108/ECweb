<?php 
	/**
	* 
	*/
	class Product_list_catalog_Controller extends Controller
	{
		public function index()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$this->model->load('catalog');
			$this->model->load('brand');
			$brand = $this->model->brand->get_brand_by_catalog($id);
			$catalog = $this->model->catalog->get_select_catalog($id);
			$product = $this->model->product->get_list_by_catalog($id);
			$data = array('data' => $product,'catalog'=>$catalog,'brand'=>$brand);
			$this->view->load('product_list_catalog',$data);
		}
	}
 ?>