<?php
	session_start();
	define('PATH_SYSTEM', __DIR__.'/system/');
	define('PATH_APPLICATION', __DIR__.'/site/');
	// lay config
	require PATH_SYSTEM.'config/config.php';
	require PATH_SYSTEM.'core/DB_Driver.php';
	//goi rout
	require PATH_SYSTEM.'core/rout.php';
	 load();
?>