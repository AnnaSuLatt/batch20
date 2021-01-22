<?php 

	class Order_mdl
	{
		protected $pdo;

		function __construct()
		{
			require $GLOBALS['database_path'];
			$this->pdo = $pdo;
		}

		function insert_data($data){
			session_start();
			$carts = $data['cart'];
			$total = $data['total'];
			$note = $data['note'];
			date_default_timezone_set("Asia/Rangoon");
			$orderdate = date('Y-m-d');
			$voucherno = strtotime(date("h:i:s"));
			$status = 0;
			$userid = $_SESSION['login_user']['id'];
			$sql = "INSERT INTO orders (orderdate, voucherno, total, note, status, user_id) VALUES (:v1, :v2, :v3, :v4, :v5, :v6)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindParam(':v1', $orderdate);
			$stmt->bindParam(':v2', $voucherno);
			$stmt->bindParam(':v3', $total);
			$stmt->bindParam(':v4', $note);
			$stmt->bindParam(':v5', $status);
			$stmt->bindParam(':v6', $userid);
			$stmt->execute();
			// last OrderId
			$orderid = $this->pdo->lastInsertId();
			foreach ($carts as $cart) {
				$itemid = $cart['id'];
				$qty = $cart['qty'];
				$sql = "INSERT INTO item_order(qty, item_id, order_id) VALUES(:v1, :v2, :v3)";
				$stmt = $this->pdo->prepare($sql);
				$stmt->bindParam(':v1', $qty);
				$stmt->bindParam(':v2', $itemid);
				$stmt->bindParam(':v3', $orderid);
				$stmt->execute();
			}
			$rows = $stmt->rowCount();
			return $rows; 

		}









	}
?>