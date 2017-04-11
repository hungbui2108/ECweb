<?php 
	/**
	* 
	*/
	class Transaction_detail_Controller extends Controller
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
			$this->model->load('trans_detail');
			$this->model->load('product');
			$data = $this->model->trans_detail->get_select_trans_detail($id);
			$array = array();
			foreach ($data as $key => $value) {
				$product = $this->model->product->get_select_product($value['product_id']);
				$value['product_name'] = $product['name'];
				$array[] = $value;
			}
			$view = array('data'=>$array,'id'=>$id);
			$this->view->load('transaction_detail',$view);
		}
	}
 ?>
