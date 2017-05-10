<?php 
	/**
	* 
	*/
	class Invoice_Controller extends Controller
	{
		function __construct()
		{
			parent::__construct();
			if (!isset($_SESSION['user'])) {
				header('Location: index.php?c=login');
			}
		}
		public function index()
		{
			$this->library->load('date');
			$this->model->load('product');
			$data = array();
			foreach ($_SESSION['cart'] as $key => $value) {
				$product = $this->model->product->get_select_product($value['id']);
					(int)$stotal = $value['qty']*$product['price'];
					array_push($data, array('name'=>$product['name'],'price'=>$product['price'],'qty'=>$value['qty'],'stotal'=>$stotal,'id'=>$value['id']));
			}
			$sum = 0;
			foreach ($data as $key => $value) {
				$sum = $sum + $value['stotal'];
			}
			$date = $this->library->date->get_date();
			$user = $_SESSION['user'];
			$array = array('data' => $data,'sum' => $sum,'date'=>$date,'user'=>$user);
			$this->view->load('invoice',$array);
		}
		public function buy()
		{
			$this->library->load('date');
			$this->model->load('product');
			$this->model->load('transaction');
			$this->model->load('trans_detail');
			$this->library->load('cart');
			$data = array();
			foreach ($_SESSION['cart'] as $key => $value) {
				$product = $this->model->product->get_select_product($value['id']);
					(int)$stotal = $value['qty']*$product['price'];
					array_push($data, array('name'=>$product['name'],'qty'=>$value['qty'],'stotal'=>$stotal,'id'=>$product['id']));
			}
			$sum = 0;
			foreach ($data as $key => $value) {
				$sum = $sum + $value['stotal'];
			}
			$date = $this->library->date->get_date();
			$user = $_SESSION['user'];
			$transaction = array('user_id'=>$user['id'],'user_name'=>$user['name'],'user_email'=>$user['email'],'user_phone'=>$user['phone'], 'amount'=>$sum,'created'=>$date); 
			if ($this->model->transaction->insert_transaction($transaction)) {
				$tran = $this->model->transaction->get_transaction_desc();
				$id = $tran['0']['id'];
				foreach ($data as $key => $value) {
					$trans_detai_formation = array('transaction_id'=>$id,'product_id'=>$value['id'],'qty'=>$value['qty'],'amount'=>$value['stotal']);
					$trans_detail = $this->model->trans_detail->insert_trans_detail($trans_detai_formation);
				}
				$cart = $this->library->cart->delete_all_cart();
				header('Location:index.php');
			}
		}
	}
 ?>