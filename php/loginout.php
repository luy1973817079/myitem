<?php

session_start();
header("content-type:text/html;charset=utf8");
if( !empty( $_SESSION['user'])){
	
	session_destroy();
}else{
	
	setcookie('user',$_COOKIE['user'],time()-1,'/');
	
}

$msg = "退出登录";
$jumpUrl = 'login.php';
include 'tips.php';


?>

