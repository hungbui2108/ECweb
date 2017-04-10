<?php
	function load()
	{
		//load config
		$config = include_once PATH_APPLICATION.'config/init.php';
		//gan bien control va action
		$controller = $_GET['c'] ?? $config['default_controller'];
		$action =  $_GET['a'] ?? $config['default_action'];
		//viet hoa chu dau controller
		$controller = ucfirst($controller).'_Controller';
		require_once PATH_SYSTEM.'core/Controller.php';
		//kiem tra controller
		if(!file_exists(PATH_APPLICATION.'controller/'.$controller.'.php')) {
			die('file khong ton tai ');
		}
		require PATH_APPLICATION.'controller/'.$controller.'.php';
		//kiem tra class exist
		if (!class_exists($controller)) {
			echo "khong tim thay controller";
		}
			$controllerobj = new $controller();
		//kiem tra methob exit
		if (!method_exists($controllerobj, $action)) {
			die('methob khong ton tai');
		}
		if (isset($_GET['d'])) {
			$data = $_GET['d'];
			$controllerobj->{$action}($data);
		}
		else{
			$controllerobj->{$action}();
		}

	}
?>