<?php 
	/**
	 * 
	 */
	class Subcategory_mdl
	{
		protected $pdo;
		function __construct()
		{
			require $GLOBALS['database_path'];
			$this->pdo = $pdo;

		}

		function getall(){
			$sql = "SELECT subcategories.*, categories.id as cid, categories.name as cname
					FROM subcategories
					LEFT JOIN categories
					ON subcategories.category_id = categories.id";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			return $rows;
		}


		function insert_data($data){
			$sql = "INSERT INTO subcategories (name, category_id) VALUES (:v1, :v2)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $data['name']);
			$stmt->bindParam(':v2', $data['categoryid']);
			$stmt->execute();

			$row = $stmt->rowCount();

			return $row;

		}

		function getallBycategoryid($id){
			$sql = "SELECT * FROM subcategories WHERE category_id = :v1";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $id);
			$stmt->execute();
			
			$rows = $stmt->fetchAll();

			return $rows;
		}
	}
?>