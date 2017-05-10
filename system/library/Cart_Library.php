<?php 
	/**
	* 
	*/
	class Cart_Library
	{
		public function add_cart($id,$qty)
		{
			if (!empty($_SESSION['cart'])) {
				$flag = 0;
				foreach ($_SESSION['cart'] as $key => $value) {
					if ($id==$value['id']) {
						$_SESSION['cart'][$key]['qty'] = $value['qty'] + $qty;
						$flag = 1;
						break;
					}
				}
				if ($flag==0) {
					array_push($_SESSION['cart'],array('id' => $id,'qty'=>$qty ));
				}
			}
			else{
				$_SESSION['cart'] = array(array('id'=>$id,'qty'=>$qty));
			}
		}
		public function delete_item_cart($id)
		{
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($id == $value['id']) {
					unset($_SESSION['cart'][$key]);
				}
			}
		}
		public function delete_all_cart()
		{
			unset($_SESSION['cart']);
		}
		public function update_cart($id,$qty)
		{
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($id==$value['id']) {
					$_SESSION['cart'][$key]['qty'] = $qty;
				}
			}
		}
	}
 ?>