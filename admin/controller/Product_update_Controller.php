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
		public function index()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$data = $this->model->product->get_select_product($id);
			$array = array('name' => $data['name'],'price'=>$data['price'],'sold_qty'=>$data['sold_qty'],
				'storage_qty'=>$data['storage_qty'],'id'=>$id );
			$this->view->load('product_update',$array);
		}
		public function update_product()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$this->library->load('upload');
			$this->library->load('date');
			$content ='';
			$temp = $this->model->product->get_select_product($id);
			$date = "'".$this->library->date->get_date()."'";
			$image_link = '';

			$name = "'".$_POST['name']."'";
			$price = $_POST['price'];
			$storage_qty = $_POST['storage_qty'];
			if(empty($_POST['content'])){				
				$content = "'".$temp['content']."'";	
			} 
			else{
				$content = "'".$_POST['content']."'";
			}
			if (!$_FILES['file']['name']) {
				$image_link = "'".$temp['image_link']."'";
			}
			else{
				$upload = array('name' => $_FILES['file']['name'],
						'tmp_name' => $_FILES['file']['tmp_name'],
						'type' => $_FILES['file']['type'],
						'size' => $_FILES['file']['size'],
						'path' => 'upload/image/'
					 );
				$up = $this->library->upload->upload($upload);
				$image_link = "'".$upload['path'].$upload['name']."'";
				echo $image_link;
			}
			$data = array('name'=>$name,'price'=>$price,'storage_qty'=>$storage_qty,
				'content'=>$content,'image_link'=>$image_link,'modify_time'=>$date);
			if ($do = $this->model->product->update_product($data,$id)) {
				header('Location:admin.php?c=product_list');
			}
			else{
				header('Location:admin.php?c=product_update&&d='.$id);
			}

	}
}
 ?>