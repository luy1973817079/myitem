<?php
session_start();
$host = 'localhost';
$hostuser = 'root';
$hostpass = 'root';
$database = 'myitem';

$conn = new mysqli($host,$hostuser,$hostpass,$database);

if($conn->connect_error ){
	
	die('数据库连接失败');
	
}

$jumpUrl = '../html/sql-login.html';

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
	
	$sql = "SELECT user,pass FROM i_userinfo WHERE user = '$user'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		
		$row=$result->fetch_assoc();
		if($row['pass'] == $pass){
			
			if(empty($_POST['freeLogin'])){
				
				$_SESSION['user'] = $user;
			}else{
				
				setcookie('user',$user,time()+5*24*60*60,'/');
			}
			
			$msg = '登录成功';
			include 'sql-index.php';
			exit;
		}else{
			
			$msg = '密码错误';
			include 'tips.php';
			exit;
		}
		
	}else{
		
			 $msg = '用户名不存在';
			include 'tips.php';
			exit;
	}
	
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



