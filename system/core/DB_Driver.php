<?php 
// require 'system/config/config.php';
	/**
	* 
	*/
	class DB_Driver
	{
		private $__conn;

		function __construct()
		{
			$this->__conn =  mysqli_connect('localhost', 'root', '', 'banhang') or die ('Lỗi kết nối');
			// mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME') or die ('Lỗi kết nối');
 
	        // Xử lý truy vấn UTF8 để tránh lỗi font
    	    mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    	    mysqli_set_charset($this->__conn, 'utf8' );

    	    // mysql_query("SET NAMES 'utf8';"); 
    	    // mysql_query("SET CHARACTER SET 'utf8';"); 
    	    // mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 


		}
		function __destruct(){
			if ($this->__conn) {
				mysqli_close($this->__conn);
			}
		}
		public function insert($table,$data)
		{
			$fieldlist = '';
			$valuelist = '';
			// chay vong lap load du lieu vao query
			foreach ($data as $key => $value) {
				$fieldlist .= $key.',';
				$valuelist .= "'".$value."',";
			}
			//xoa dau , cuoi cung
			$fieldlist = rtrim($fieldlist,',');
			$valuelist = rtrim($valuelist,',');
			$sql = 'INSERT INTO '.$table.'('.$fieldlist.') value ('.$valuelist.')' ;
			if ($do = mysqli_query($this->__conn,$sql)) {
				return true;
			}
			return false;
		}
		public function delete($table,$where)
		{
			$sql = 'DELETE FROM '.$table.' WHERE '.$where;
			if ($do = mysqli_query($this->__conn,$sql)) {
				return true;
			}
			return false;
		}
		public function update($table,$data,$where)
		{
			$query = '';
			// chay vong lap lay data
			foreach ($data as $key => $value) {
				$query .= $key." = ".$value.",";
			}
			$query = rtrim($query,',');
			$sql = 'UPDATE '.$table.' SET '.$query.' WHERE '.$where;
			if ($do = mysqli_query($this->__conn,$sql)) {
				return true;
			}
			return false;
		}
		public function get_all($table)
		{
			$sql = 'SELECT * FROM '.$table;
			$result = mysqli_query($this->__conn,$sql);
			$data = array();
			 while($row=mysqli_fetch_assoc($result)){
			 	$data[]= $row;
			 }
			 return $data;
		}
		public function get_select($table,$where)
		{
			$sql = 'SELECT * FROM '.$table.' WHERE '.$where;
			$result = mysqli_query($this->__conn,$sql);
			$data = array();
			 while($row=mysqli_fetch_assoc($result)){
			 	$data[]= $row;
			 }
			 return $data;
		}
		public function get_one($table,$where)
		{
			$sql = 'SELECT * FROM '.$table.' WHERE '.$where;
			$result = mysqli_query($this->__conn,$sql);
			$data = array();
			if($row=mysqli_fetch_assoc($result)){
			 	$data= $row;
			 	return $data;
			 }
			return false;
		}
		public function get_order_desc($table,$order)
		{
			$sql = 'SELECT * FROM '.$table.' ORDER BY '.$order.' DESC';
			$result = mysqli_query($this->__conn,$sql);
			$data = array();
			 while($row=mysqli_fetch_assoc($result)){
			 	$data[]= $row;
			 }
			 return $data;
		}
		public function search($table,$key)
		{
			$sql = "SELECT * FROM ".$table." WHERE name like '%$key%'";
			$search = mysqli_query($this->__conn,$sql);
			$data = array();
			while ($row=mysqli_fetch_assoc($search)) {
			 	$data[] = $row;
			 }
			 return $data;
		}

	}
?>