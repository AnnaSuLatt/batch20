<?php 

	class Category_ctrl
	{
		
		function __construct()
		{
			require $GLOBALS['model_file_path']."Category_mdl.php";
		}

		function read(){
			$category_mdl = new Category_mdl();
			$getallresults = $category_mdl->getall();

			return $getallresults;
		}

		function insert(){
			$name = $_POST['name'];
			$photo = $_FILES['photo'];

			$source_dir = $GLOBALS['file_path'].'storage/category/';
			$fullpath = $source_dir.$photo['name'];
			move_uploaded_file($photo['tmp_name'], $fullpath);

			$uploadpath = 'storage/category/'.$photo['name'];

			$data =array(
				'name'	=>	$name,
				'photo'	=>	$uploadpath
			);

			$category_mdl = new Category_mdl();

			$addresult = $category_mdl->insert_data($data);
			
			$url = $GLOBALS['view_path'].'category_list';
			header('location:'.$url);

		}
	}
?>