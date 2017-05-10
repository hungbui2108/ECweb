<?php 
	/**
	* 
	*/
	class Product_list_brand_Controller extends Controller
	{
		public function index()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$this->model->load('brand');
			$this->model->load('catalog');
			$product = $this->model->product->get_list_by_brand($id);
			$brand = $this->model->brand->get_select_brand($id);
			$catalog = $this->model->catalog->get_select_catalog($brand['catalog_id']);
			$data = array('product' => $product, 'brand'=>$brand, 'catalog'=>$catalog );
			$this->view->load('product_list_brand',$data);
		}
	}
 ?>