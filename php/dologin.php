<?php
session_start();

header("content-type:text/html;charset=utf8");


$jumpUrl = 'login.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(empty($_POST['user'])){
		$msg = '用户名不能为空';
		include 'tips.php';
		exit;
	}else{
		
			$re = '/^[a-zA-Z]+$/';
			$user = $_POST['user'];
		if(!preg_match($re,input_fn($user))){
			$msg = '用户名格式不正确';
			include 'tips.php';
			exit;
			
		}
	}
	
	if(empty($_POST['pass'])){
		$msg = '密码不能为空';
		include 'tips.php';
		exit;
	}else{
		
			$re = '/^\w+$/';
			$pass = $_POST['pass'];
		if(!preg_match($re,input_fn($pass))){
			$msg = '密码格式不正确';
			include 'tips.php';
			exit;
			
		}
	}
	
	$f = fopen('user.txt','r');
	while($fl = fgets($f)){
		
		$userArr = explode('/',$fl);
		if( $userArr[0] == $user){
			if($userArr[1]  == $pass){
			if(empty($_POST['freeLogin']) ) {
				
				$_SESSION['user'] = $user;
				
			}else{
				
				setcookie('user',$user,time()*24*60*60*5,"/");
				
				
			}
				  $msg = '登录成功';
				
				$jumpUrl = 'index.php';
				include 'tips.php';
				exit;
			}else{
				
				$msg = '密码错误';
				include 'tips.php';
				exit;
			}
		}
		
	}
	
		$msg = '用户名不存在';
			include 'tips.php';
			exit;

	
}else{
	
	$msg = '非法登录';
	include 'tips.php';
	
	
}



function input_fn($date){
	
	$date = htmlspecialchars($date);
	$date = trim($date);
	$date = stripslashes($date);
	return $date;
	
}

?>



