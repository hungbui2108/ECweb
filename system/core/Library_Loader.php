<?php
	/**
	* 
	*/
	class Library_Loader
	{
		
		public function load($library,$args = array())
		{
			//neu chua load thu vien thi load
			if (empty($this->{$library})) {
				$class = ucfirst($library).'_Library';
				//goi thu vien
				require_once PATH_SYSTEM.'library/'.$class.'.php';
				//khoi tao thu vien + truyen bien
				$this->{$library} = new $class($args);
			}
		}
	}
?>