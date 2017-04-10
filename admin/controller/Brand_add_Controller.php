<?php 
	/**
	* 
	*/
	class Brand_add_Controller extends Controller
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
			$this->model->load('catalog');
			$catalog = $this->model->catalog->get_all_catalog();
			$data = array('catalog' => $catalog
			 );
			$this->view->load('brand_add',$data);
		}
		public function add_brand()
		{
			$this->model->load('brand');
			$catalog=$_POST['catalog'];
			$brand_name =$_POST['name'];
			$data = array('catalog_id'=>$catalog,'name'=>$brand_name);
			if ($do = $this->model->brand->add_brand($data)) {
				header('Location: admin.php?c=brand_list');
			}
			else{
				header('Location: admin.php?c=brand_add');
			}
		}
	}
 ?>