<?php 
	class Item_ctrl
	{
		
		function __construct()
		{
			require $GLOBALS['model_file_path']."Item_mdl.php";
		}

		function discountitems(){
			$item_mdl = new Item_mdl();
			$getdiscountresults = $item_mdl->discountitems_data();

			return $getdiscountresults;
		}

		function newitems(){
			$item_mdl = new Item_mdl();
			$getnewitemresults = $item_mdl->newitems_data();

			return $getnewitemresults;
		}

		function randomitems(){
			$item_mdl = new Item_mdl();
			$getrandomresults = $item_mdl->randomitems_data();

			return $getrandomresults;
		}
		
	}
?>