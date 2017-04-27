<?php 
	/**
	* 
	*/
	class Transaction_done_Controller extends Controller
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
			$id = $_GET['id'];
			$this->model->load('transaction');
			$this->model->load('product');
			$this->model->load('trans_detail');
			$product = $this->model->trans_detail->get_select_trans_detail($id);
			foreach ($product as $key => $value) {
				$update = array('storage_qty'=>'storage_qty-1','sold_qty'=>'sold_qty+1');
				$product_update = $this->model->product->update_product($update,$value['product_id']);
			}
			$data = array('status'=>1);
			if ($do = $this->model->transaction->update_transaction($data,$id)) {
				header('Location:admin.php?c=transaction_list');
			}
		}
	}
 ?>