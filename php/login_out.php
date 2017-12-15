<?php

session_start();
header("content-type:text/html;charset=utf8");
if( !empty( $_SESSION['username'])){
	
	session_destroy();
}else{
	
	setcookie('user',$_COOKIE['username'],time()-1,'/');
	
}

$msg = "退出登录";
$jumpUrl = 'admin.php';
include 'tips.php';


?>

