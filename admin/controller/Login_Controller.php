<?php
	/**
	* 
	*/
	class Login_Controller extends Controller
	{
		
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
				if ($data['username'] == $username && $data['password'] == $password) {
					$_SESSION['username'] = $username;
					header('Location: admin.php?c=home');
				}
			}
		}
			// header('Location:admin.php?c=login');
		}
	}
?>