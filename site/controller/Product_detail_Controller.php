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
			if (isset($_GET['add'])) {
				$product['add'] = 1;
			}
			if ($product['storage_qty']<=0) {
				$product['stqty'] = 1;
			}
			else{
				$product['stqty'] = 0;
			}
			$this->view->load('product',$product);
		}
	}
 ?>