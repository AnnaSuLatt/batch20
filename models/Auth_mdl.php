<?php 

	class Auth_mdl
	{
		protected $pdo;

		function __construct()
		{
			require $GLOBALS['database_path'];
			$this->pdo = $pdo;
		}

		function register_data($data){
			$sql = "INSERT INTO users (name, email, password, phone, address, status) VALUES (:v1, :v2, :v3, :v4, :v5, :v6)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $data['name']);
			$stmt->bindParam(':v2', $data['email']);
			$stmt->bindParam(':v3', $data['password']);
			$stmt->bindParam(':v4', $data['phone']);
			$stmt->bindParam(':v5', $data['address']);
			$stmt->bindParam(':v6', $data['status']);
			$stmt->execute();

			// last UserId
			$userid = $this->pdo->lastInsertId();
			$roleid = 2;

			$sql = "INSERT INTO model_has_roles (user_id, role_id) VALUES(:v1, :v2)";
			$stmt= $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $userid);
			$stmt->bindParam(':v2', $roleid);
			$stmt->execute();

			$rows = $stmt->rowCount();

			return $rows;

		}

		function login_data($data)
		{
			$sql = "SELECT users.*, model_has_roles.role_id as roleid, roles.name as rolename 
					FROM users 
					INNER JOIN model_has_roles ON users.id = model_has_roles.user_id
					INNER JOIN roles ON model_has_roles.role_id = roles.id
					WHERE email=:v1 AND password=:v2";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $data['email']);
			$stmt->bindParam(':v2', $data['password']);
			$stmt->execute();

			$user = $stmt->fetch(PDO::FETCH_ASSOC);

			return $user;
		}
	}
?>