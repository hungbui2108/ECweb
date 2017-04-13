<?php 
	/**
	* 
	*/
	class Home_Controller extends Controller
	{
		public function index()
		{
			$this->model->load('product');
			$data = $this->model->product->get_best_sale();
			$array = array('data' => $data);
			$this->view->load('home',$array);
		}
	}
 ?>