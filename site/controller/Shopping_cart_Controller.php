<?php 
	/**
	* 
	*/
	class Shopping_cart_Controller extends Controller
	{
		public function index()
		{
			if (!empty($_SESSION['cart'])) {
				$this->model->load('product');
				$data = array();
				foreach ($_SESSION['cart'] as $key => $value) {
					$product = $this->model->product->get_select_product($value['id']);
					(int)$stotal = $value['qty']*$product['price'];
					array_push($data, array('name'=>$product['name'],'price'=>$product['price'],'qty'=>$value['qty'],'stotal'=>$stotal,'image_link'=>$product['image_link'],'id'=>$value['id']));
				}
				$sum = 0;
				foreach ($data as $key => $value) {
					$sum = $sum + $value['stotal'];
			}
			$array = array('data' => $data,'sum' => $sum);
			$this->view->load('shopping_cart',$array);
			}
			else{
				$data = array('name'=>'','price'=>'','image_link'=>'','qty'=>'','stotal'=>'');
				$sum = 0;
				$array = array('data'=>$data,'sum'=>$sum);
				$this->view->load('shopping_cart',$array);
			}
		}
		public function add_cart()
		{
			$id = $_GET['id'];
			$this->model->load('product');
			$product = $this->model->product->get_select_product($id);
			$qty = $_POST['qty'];
			if ($product['storage_qty']<$qty) {
				header('Location: index.php?c=product_detail&id='.$id.'&add=fail');
			}
			else{
				$this->library->load('cart');
				$this->library->cart->add_cart($id,$qty);
				header('Location: index.php?c=shopping_cart');
			}
		}
		public function update_cart()
		{
			$id = $_GET['id'];
			$qty = $_POST['qty'];
			$this->library->load('cart');
			$this->library->cart->update_cart($id,$qty);
			header('Location: index.php?c=shopping_cart');
		}
		public function delete_cart()
		{
			$id = $_GET['id'];
			$this->library->load('cart');
			$this->library->cart->delete_item_cart($id);
			header('Location: index.php?c=shopping_cart');
		}
	}
 ?>