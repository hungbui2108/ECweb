<?php
	/**
	* 
	*/
	class Login_Controller extends Controller
	{
	function __construct($foo = null)
		{
			require_once PATH_SYSTEM.'core/Library_Loader.php';
			$this->library = new Library_Loader();
			//load view
			require_once PATH_SYSTEM.'core/View_Loader.php';
			$this->view = new View_Loader();
			//load model
			require_once PATH_SYSTEM.'core/Model_Loader.php';
			$this->model = new Model_Loader();
		}		
		public function index()
		{
			# code...
			$this->view->load('login');
		}
		public function check_login()
		{
			$this->model->load('admin');
			// print_r($this->model->admin->get_username());
			$username = $_POST['username'] ?? '';
			$password = $_POST['password'] ?? '';
			$data = $this->model->admin->get_username($username);
			if ($data) {
				foreach ($data as $key => $value) {
				if ($value['username'] == $username && $value['password'] == $password) {
					$_SESSION['username'] = $username;
					header('Location: admin.php?c=home');
					}
				}
			}
		}
		public function __destruct()
		{
			# code...
		}
	}
?>