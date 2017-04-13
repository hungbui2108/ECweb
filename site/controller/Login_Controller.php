<?php 
	/**
		* 
		*/
		class Login_Controller extends Controller
		{
			public function index()
			{
				$this->view->load('login');
			}
			public function check_login()
			{
				$this->model->load('user');
				$username = $_POST['username'] ?? '';
				$password = $_POST['password'] ?? '';
				$data = $this->model->user->get_username($username);
				if ($data) {
					foreach ($data as $key => $value) {
						if ($value['name'] == $username && $value['password'] == $password) {
							$_SESSION['user'] = $value;
							header('Location:index.php?c=home');
							}
					}
				}
			}
		}	
?>