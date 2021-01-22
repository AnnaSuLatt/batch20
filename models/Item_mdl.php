<?php 
	/**
	 * 
	 */
	class Item_mdl
	{
		protected $pdo;
		function __construct()
		{
			require $GLOBALS['database_path'];
			$this->pdo = $pdo;

		}

		function discountitems_data(){
			$sql = "SELECT * FROM items WHERE discount != '' LIMIT 8";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			return $rows;
		}

		function newitems_data(){
			$sql = "SELECT * FROM items ORDER BY created_at DESC LIMIT 8";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			return $rows;
		}

		function randomitems_data(){
			$subcategoryid = 16;

			$sql = "SELECT * FROM items WHERE subcategory_id = :v1 LIMIT 8";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $subcategoryid);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			return $rows;
		}


















		
	}
?>