<?php
session_start();


$msg = '';
$jumpUrl = 'admin.php';
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	
	if( empty( $_POST['username'] ) )
	{
		$msg = '用户名不能为空';
		include 'tips.php';
		exit;
	};
	
	if( empty( $_POST['password'] ) )
	{
		$msg = '密码不能为空';
		include 'tips.php';
		exit;
	};
	
	
	$_SESSION['username'] = $_POST['username'];
	$msg = '登录成功';
	$jumpUrl = 'column.php';
	include 'tips.php';
	exit;
	
}
else
{
	$msg = '非法登录';
	include 'tips.php';
	exit;
};


?>