<?php 
	/**
		* 
		*/
		class Login_Controller extends Controller
		{
			public function index()
			{
				if (!isset($_GET['login'])) {
					$this->view->load('login');
				}
				else{
					$this->view->load('login',$data = array('login'=>1));
				}
			}
			public function check_login()
			{
				$this->model->load('user');
				$username = $_POST['username'] ?? '';
				$password = $_POST['password'] ?? '';
				$data = $this->model->user->get_username($username);
				$flag = 0;
				if ($data) {
					foreach ($data as $key => $value) {
						if ($value['name'] == $username && $value['password'] == $password) {
							$_SESSION['user'] = $value;
							$flag = 1;
						}
					}
				}
				if ($flag == 1) {
					header('Location:index.php?c=home');
				}
				else{
					header("Location:index.php?c=login&login=fail");
				}
			}
		}	
?>