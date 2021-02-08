<?php
require_once('models/User.php');
require_once('controllers/BaseController.php'); 
	class AuthController extends BaseController{
		public function login(){
			$this->view('auth/login.php');
		}
		public function handle(){
			$username = $_POST['username'];
			$pwd = $_POST['pwd'];
			echo $username . '-' . $pwd;
			$user_model = new User();
			$check = $user_model->check($username,$pwd);
			if ($check) {
				$_SESSION['login'] = true;
				echo "Đăng nhập thành công";
				setcookie('success', 'Dang nhap thanh cong', time() + 2);
				$this->redirect('index.php?type=backend&mod=dashboard&act=index');
			}
			else {
				echo "Đăng nhập thất bại";
				setcookie('error', 'Dang nhap khong thanh cong', time() + 2);
				$this->redirect('index.php?mod=auth&act=login');
			}
	}
}
?>