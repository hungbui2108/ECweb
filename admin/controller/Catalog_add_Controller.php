<?php 
	/**
	* 
	*/
	class Catalog_add_Controller extends Controller
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
			$this->view->load('catalog_add');
		}
		public function add_catalog()
		{
			$this->model->load('catalog');
			$catalog =$_POST['name'];
			$data = array('name'=>$catalog);
			if ($do = $this->model->catalog->add_catalog($data)) {
				header('Location: admin.php?c=catalog_list');
			}
			else{
				header('Location: admin.php?c=catalog_add');
			}
		}
	}
 ?>