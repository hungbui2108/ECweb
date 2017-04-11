<?php 
	/**
	* 
	*/
	class Product_update_Controller extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!isset($_SESSION['username'])) {
					header('Location: admin.php?c=login');
			}
		}
		public function index($id)
		{
			$this->model->load('product');
			$data = $this->model->product->get_select_product($id);
			$array = array('name' => $data['name'],'price'=>$data['price'],'sold_qty'=>$data['sold_qty'],'id'=>$id );
			$this->view->load('product_update',$array);
		}
		public function update_product($id)
		{
			$this->model->load('product');
			$this->library->load('upload');
			$this->library->load('date');
			$content ='';
			$temp = $this->model->product->get_select_product($id);
			$date = "'".$date."'";
			$image_link = '';

			$name = "'".$_POST['name']."'";
			$price = $_POST['price'];
			$sold_qty = $_POST['sold_qty'];
			if(!isset($_POST['content'])){				
				$content = "'".$temp['content']."'";	
			} 
			else{
				$content = "'".$_POST['content']."'";
			}
			if (isset($_FILES['file'])) {
				$upload = array('name' => $_FILES['file']['name'],
						'tmp_name' => $_FILES['file']['tmp_name'],
						'type' => $_FILES['file']['type'],
						'size' => $_FILES['file']['size'],
						'path' => 'upload/image/'
					 );
				$upload = $this->library->upload->upload($upload);
				$image_link = "'".$upload['path'].$upload['name']."'";
			}
			else{$image_link = "'".$temp['image_link']."'";}
			$data = array('name'=>$name,'price'=>$price,'sold_qty'=>$sold_qty,
				'content'=>$content,'image_link'=>$image_link,'modify_time'=>$date);
			if ($do = $this->model->product->update_product($data,$id)) {
				header('Location:admin.php?c=product_list');
			}
			header('Location:admin.php?c=product_update&&d='.$id);
	}
}
 ?>