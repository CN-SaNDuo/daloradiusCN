<?php
session_start();

// if the user is logged in, unset the session.如果用户登录，取消设置会话
if (isset($_SESSION['daloradius_logged_in'])) {
	unset($_SESSION['daloradius_logged_in']);
	}

// completely destory the session and all it's variables完 全destory会话和它所有的变量
session_destroy();

// now that the user is logged out,现在，用户将被注销，
// go to login page去到登录页面
header('Location: login.php');
?>
