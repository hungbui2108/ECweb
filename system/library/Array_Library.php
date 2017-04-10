<?php 
	/**
	* 
	*/
	class Array_Library
	{
		public function unique_name($data)
		{
			$array = array();
			foreach ($data as $key => $value) {
					$array[] = $value['name'];
				}
				$array = array_unique($array);
				return $array;
		}
	}
 ?>