<?php 
	
	require 'config.php';

	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$router = $components[3];

	// Category Controller
	require $GLOBALS['controller_file_path']."Category_ctrl.php";
	$category = new Category_ctrl();

	// Brand Controller
	require $GLOBALS['controller_file_path']."Brand_ctrl.php";
	$brand = new Brand_ctrl();

	// Subcategory Controller
	require $GLOBALS['controller_file_path']."Subcategory_ctrl.php";
	$subcategory = new Subcategory_ctrl();

	// Category
	if ($router == 'category_list') {
		$categories = $category->read();
		require $GLOBALS['view_file_path']."category_list.php";
	}
	elseif ($router == 'category_new') {
		require $GLOBALS['view_file_path']."category_new.php";
	}
	elseif($router == 'category_add'){
		$category->insert();
	}
	elseif ($router == 'category_edit') {
		$id = $_GET['id'];

		$categoryedit = $category->edit($id);

		require $GLOBALS['view_file_path']."category_edit.php";	
	}
	elseif($router == 'category_update'){
		$category->update();
	}
	elseif ($router == 'category_delete') {
		$id = $_POST['id'];

		$category->delete($id);
	}

	// Brand
	elseif ($router == 'brand_list') {
		$brands = $brand->read();
		require $GLOBALS['view_file_path']."brand_list.php";
	}
	elseif ($router == 'brand_new') {
		require $GLOBALS['view_file_path']."brand_new.php";
	}
	elseif($router == 'brand_add'){
		$brand->insert();
	}


	// Subcategory
	elseif($router == 'subcategory_list'){
		$subcategories = $subcategory->read();

		require $GLOBALS['view_file_path']."subcategory_list.php";
	}

	elseif($router == 'subcategory_new'){
		$categories = $category->read();
		
		require $GLOBALS['view_file_path']."subcategory_new.php";
	}


	elseif($router == 'subcategory_add'){
		$subcategory->insert();
	}

	elseif($router == ''){
		$brands = $brand->read();
		
		require $GLOBALS['view_file_path']."home.php";
	}








?>