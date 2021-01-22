<?php 

	class Auth_ctrl
	{
		
		function __construct()
		{
			require $GLOBALS['model_file_path']."Auth_mdl.php";
		}

		function register(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$address = $_POST['address'];

			$data =array(
				'name'	=>	$name,
				'email'	=>	$email,
				'phone'	=>	$phone,
				'password'	=>	$password,
				'address'	=>	$address,
				'status'	=>	0,
			);
			$auth_mdl = new Auth_mdl();
			$addresult = $auth_mdl->register_data($data);

			session_start();
			$_SESSION['reg_success'] = 'Yes., it is not easy, but you did it! Please Signin again.';

			$url = $GLOBALS['view_path'].'login';
			header('location:'.$url);
		}

		function login(){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$data = array(
				'email'	=>	$email,
				'password'	=>	$password
			);
			$auth_mdl = new Auth_mdl();
			$loginresult = $auth_mdl->login_data($data);

			session_start();
			if ($loginresult) {
				$_SESSION['login_user'] = $loginresult;

				$roleid = $loginresult['roleid'];
				if ($roleid == 2) {
					if (isset($_SESSION['cartURL'])) {
						header('location:'.$_SESSION['cartURL']);
					}else{
						$url = $GLOBALS['view_path'];
						header('location:'.$url);
					}
					
				}else{
					$url = $GLOBALS['view_path'].'category_list';
					header('location:'.$url);
				}
			}else{
				$_SESSION['login_fail'] = 'Your current email and password is invalid.';

				$url = $GLOBALS['view_path'].'login';
				header('location:'.$url);
			}
		}

		function logout(){
			session_start();

			session_destroy();

			$url = $GLOBALS['view_path'];
			header('location:'.$url);

		}


		function order(){
			$cart =   $_POST['cart'];

			var_dump($cart);
		}










	}
?>