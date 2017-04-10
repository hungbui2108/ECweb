<?php
	/**
	* 
	*/
	class Model_Loader
	{
		public function load($model)
		{
			if (empty($this->{$model})) {
				$class = ucfirst($model).'_Model';
				//goi thu vien
				require_once PATH_APPLICATION.'model/'.$class.'.php';
				//khoi tao thu vien
				$this->{$model} = new $class();
			}
		}
	}
?>