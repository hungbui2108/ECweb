<?php 
	/**
	* 
	*/
	class Signup_Controller extends Controller
	{
		public function index()
		{
			$this->view->load('signup');
		}
		public function sign_up()
		{
			$this->model->load('user');
			$array = $this->model->user->get_all_user();
			foreach ($data as $key => $value) {
				if ($value['name']=$_POST['username']) {
					header('Location:index.php?c=signup&&a=signup_fail');
				}
			}
			$data = array(
				'name' => $_POST['username'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				'phone' => $_POST['phone'],
				'address' => $_POST['adress']
						);
			if ($done = $this->model->user->insert_user($data)) {
				header('Location: index.php?c=login');
			}
			else{
				header('Location: index.php?c=signup&&a=signup_fail');
			}
		}
		public function signup_fail()
		{
			$this->view->load('signup',$signup=array('signup'=>1));
		}
	}
?>