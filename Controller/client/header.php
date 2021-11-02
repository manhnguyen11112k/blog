<?php

class Header {
	public function __construct()
	{
		require_once('Model/client/UserModel.php');

		$userModel = new UserModel();
		$error = $this->signUp($userModel);
		$errorLogin = $this->login($userModel);

		require('View/client/layouts/header.php');
	}

	public function signUp($userModel) {
		$username = $password = $fullName = NULL;
		$error = array();
		$error['username'] = $error['password'] = $error['full_name'] = $error['username_exist'] = NULL;

		if (isset($_POST['signup'])) {
			if (empty($_POST['username'])) {
				$error['username'] = '* Cần điền tên đăng nhập';
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['password'])) {
				$error['password'] = '* Cần điền mật khẩu';
			} else {
				$password = $_POST['password'];
			}
			if (empty($_POST['full_name'])) {
				$error['full_name'] = '* Cần điền họ tên';
			} else {
				$fullName = $_POST['full_name'];
			}

			if ($username && $password && $fullName) {
				$check = $userModel->checkExists($username);

				if ($check->num_rows > 0) {
					$error['username_exist'] = '* Tên đăng nhập đã bị trùng';
				} else {
					$userModel->signup($username, $password, $fullName);
					echo "<script>alert('đăng ký thành công')</script>";
				}
			}
			
		}

		return $error;
	}

	public function login($userModel)
	{
		$username = $password = $fullName = NULL;
		$error = array();
		$error['username'] = $error['password'] = NULL;

		if (!empty($_POST['login'])) {
			if (empty($_POST['username'])) {
				$error['username'] = '* Cần điền tên đăng nhập';
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['password'])) {
				$error['password'] = '* Cần điền mật khẩu';
			} else {
				$password = $_POST['password'];
			}

			if ($username && $password) {
				$result = $userModel->login($username, $password);
				$check = $result->num_rows; /*đếm số dòng trong database*/
			/**
		    * Nếu số dòng trong database > 0 => lưu session + lấy dữ liệu + chuyển hướng
		    * Ngược lại thông báo alert bằng script
		    * @var array
		    */
				if ($check > 0) {
					$data = $result->fetch_array(); /*lấy dữ liệu tương ứng với username và password nhập*/
					$_SESSION['user'] = $data; /*lưu session*/
					echo "<script>alert('Đăng nhập thành công!')</script>";
					//header('Location: ./');
				} else {
					echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
				}
			}
		}

		return $error;
	}
}
$header = new Header();