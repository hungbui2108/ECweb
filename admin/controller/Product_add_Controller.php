<?php 
	/**
		* 
		*/
		class Product_add_Controller extends Controller
		
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
				$this->model->load('brand');
				$this->library->load('array');
				$catalog = $this->model->catalog->get_all_catalog();
				$brand = $this->model->brand->get_all_brand();
				//lấy tên của các hãng k trùng nhau
				$brand_name = $this->library->array->unique_name($brand);
				$data = array('catalog' => $catalog,
					'brand' => $brand_name
				 );
				$this->view->load('product_add',$data);
			}
			public function add_product()
			{
				$this->model->load('product');
				$this->library->load('upload');
				$this->model->load('brand');
				$this->library->load('date');
					$name = $_POST['name'];
					$price = $_POST['price'];
					$catalog = $_POST['catalog'];
					$content = $_POST['content'];
					$storage_qty = $_POST['storage_qty'];
					$brand = array('catalog_id' => $catalog, 'brand_name' => $_POST['brand']);
					$brand_select = $this->model->brand->get_select_brand($brand);
					$date = $this->library->date->get_date();
					$path = 'upload/image/';
					// thông ti upload
					$upload = array('name' => $_FILES['file']['name'],
						'tmp_name' => $_FILES['file']['tmp_name'],
						'type' => $_FILES['file']['type'],
						'size' => $_FILES['file']['size'],
						'path' => $path
					 );
				$data = array('catalog_id'=>$catalog, 'brand_id'=>$brand_select['id'],'name'=>$name, 'price'=>$price,
					'storage_qty'=>$storage_qty,'image_link'=>$path.$upload['name'],'content'=>$content,'modify_time'=>$date);
				if ($done1 = $this->model->product->add_product($data) 
					&& $done2 = $this->library->upload->upload($upload)) {
					header('Location:admin.php?c=product_list');
				}
				else{header('Location:admin.php?c=product_add');}
			}

		}	
?>