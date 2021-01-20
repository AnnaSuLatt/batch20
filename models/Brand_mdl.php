<?php 

	class Brand_mdl
	{
		protected $pdo;

		function __construct()
		{
			require $GLOBALS['database_path'];
			$this->pdo = $pdo;
		}

		function getall(){
			$sql = "SELECT * FROM brands ORDER BY name ASC";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			return $rows;
		}

		function insert_data($data){
			$sql = "INSERT INTO brands (name, logo) VALUES (:v1, :v2)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $data['name']);
			$stmt->bindParam(':v2', $data['photo']);
			$stmt->execute();

			$rows = $stmt->rowCount();

			return $rows;

		}
	}
?>