<?php 
	$servername = "localhost";
	$dbname = "b20_pos";
	$dbuser = "root";
	$dbpassword = "";

	$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

	$pdo = new PDO($dsn, $dbuser, $dbpassword);
	try{
		$conn = $pdo;

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connected Successfully";

	}catch(PDOException $e){
		echo "Connection Failed: ".$e->getMessage();
	}

?>