<?php
	/**
	* 
	*/
	class View_Loader
	{

		public function load($view, $data = array())
		{
			// chuyen view thanh chuan 
			$view = ucfirst($view).'_View';
			//chuyen mang thanh cac bien
			extract($data);
			// $viewdat = $data;
			// dung ob_start() de chuyen view thanh bien
			require_once PATH_APPLICATION.'view/'.$view.'.php';
			
		}
	}
?>