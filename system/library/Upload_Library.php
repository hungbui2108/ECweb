<?php
	/**
	* 
	*/
	class Upload_Library
	{
		
		public function upload($data)
		{
			if ($data['type'] == "image/jpeg"
			||	$data['type'] == "image/png"
			||	$data['type'] == "image/gif"
			||	$data['type'] == "image/JPG"){
				//file nho hon 3 Mb
				if ($data['size']>25165824 ) {
					return false;
				}
				move_uploaded_file($data['tmp_name'], $data['path'].$data['name']);
				return true;
			}
			return false;
		}
	}
?>