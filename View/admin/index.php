<?php
	session_start(); /*đăng ký phiên làm việc*/
        ob_start();
	require '../../Config/config.php';
	require '../../Model/Database.php';
	require '../../Lib/function.php';
	$db = new Database();

	/**
     * Nếu tồn tại session và giá trị level = 1 thì có quyền truy cập trang quản trị viên
     * Ngược lại thì chuyển hướng về trang chủ
     * @var array
     */

	if (!empty($_SESSION['useradmin']) && $_SESSION['useradmin']['level'] == admin) {
		require('layouts/header.php');

		if (isset($_GET['controller'])) {
			require '../../Route/admin/web.php'; /*xử lý các request trong Route/web.php*/
		} else {
			require('pages/home.php');
		}

		require('layouts/footer.php');
	} else {
		header('Location: ../../');
	}

	$db->closeDatabase();