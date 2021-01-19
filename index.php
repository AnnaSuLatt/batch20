<?php 
	
	require 'config.php';

	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$router = $components[3];

	// Category
	require $GLOBALS['controller_file_path']."Category_ctrl.php";
	$category = new Category_ctrl();

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

?>