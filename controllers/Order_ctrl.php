<?php 

	class Order_ctrl
	{
		function __construct()
		{
			require $GLOBALS['model_file_path']."Order_mdl.php";
		}
		function store(){
			$cart =   $_POST['cart'];
			$total =   $_POST['total'];
			$note =   $_POST['note'];
			$data = array(
				'cart'	=> $cart,
				'total'	=> $total,
				'note'	=> $note,
			);
			$order_mdl = new Order_mdl();
			$result = $order_mdl->insert_data($data);
			echo json_encode($result);
		}










	}
?>