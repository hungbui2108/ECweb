<?php 
	/**
	* 
	*/
	class Controller 
	{
		// obj view
		protected $view = null;
		// obj model
		protected $model = null;
		// obj controller
		protected $controller = null;
		// obj library
		protected $library = null;
		// obj config
		protected $config = null;

		public function __construct()
		{
			//load library
			require_once PATH_SYSTEM.'core/Library_Loader.php';
			$this->library = new Library_Loader();
			//load view
			require_once PATH_SYSTEM.'core/View_Loader.php';
			$this->view = new View_Loader();
			//load model
			require_once PATH_SYSTEM.'core/Model_Loader.php';
			$this->model = new Model_Loader();
			//load header
			$this->view->load('header');
		}

		public function __destruct()
		{
			//load footer
			$this->view->load('footer');
		}
		
	}

?>