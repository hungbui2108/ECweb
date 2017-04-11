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
		public function index($id)
		{
			$this->model->load('transaction');
			$data = array('status'=>1);
			if ($do = $this->model->transaction->update_transaction($data,$id)) {
				header('Location:admin.php?c=transaction_list');
			}
		}
	}
 ?>