 <?php 
 	/**
 	* 
 	*/
 	class Transaction_list_Controller extends Controller
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
 			$this->model->load('transaction');
 			$data = $this->model->transaction->get_incomplete_transaction();
 			$array = array('data' => $data);
 			$this->view->load('transaction_list',$array);
 		}
 	}
  ?>