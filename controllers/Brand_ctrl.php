<?php 

	class Brand_ctrl
	{
		
		function __construct()
		{
			require $GLOBALS['model_file_path']."Brand_mdl.php";
		}

		function read(){
			$brand_mdl = new Brand_mdl();
			$getallresults = $brand_mdl->getall();

			return $getallresults;
		}

		function insert(){
			$name = $_POST['name'];
			$photo = $_FILES['photo'];

			$source_dir = $GLOBALS['file_path'].'storage/brand/';
			$fullpath = $source_dir.$photo['name'];
			move_uploaded_file($photo['tmp_name'], $fullpath);

			$uploadpath = 'storage/brand/'.$photo['name'];

			$data =array(
				'name'	=>	$name,
				'photo'	=>	$uploadpath
			);

			$brand_mdl = new Brand_mdl();

			$addresult = $brand_mdl->insert_data($data);
			
			$url = $GLOBALS['view_path'].'brand_list';
			header('location:'.$url);

		}
	}
?>