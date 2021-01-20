<?php 
	/**
	 * 
	 	elseif($router == 'subcategory_add'){
			$subcategory->insert();
		}
	 */
	class Subcategory_ctrl
	{
		
		function __construct()
		{
			require $GLOBALS['model_file_path']."Subcategory_mdl.php";
		}

		function read(){
			$subcategory_mdl = new Subcategory_mdl();
			$getallresults = $subcategory_mdl->getall();

			return $getallresults;
		}

		function insert(){
			$name = $_POST['name'];
			$categoryid = $_POST['categoryid'];

			$data = array(
				'name'	=>	$name,
				'categoryid'	=>	$categoryid,
			);

			$subcategory_mdl = new Subcategory_mdl();

			$addresult = $subcategory_mdl->insert_data($data);

			$url = $GLOBALS['view_path'].'subcategory_list';

			header('location: '.$url);

		}
	}
?>