<?php
session_start();
header("content-type:text/html;charset=utf8");

$msg = "";
$jumpUrl = "register.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	

	
	if(empty( $_POST["user"]) ){
		
		$msg =  "用户名不能为空";
		include "tips.php";
		exit;

		}else{
			
			$re = "/^[a-zA-Z]+$/";
			$user = $_POST["user"];
			if(!preg_match($re,input_fn($user))){

				$msg =  "用户名格式不正确";
				include "tips.php";
				exit;
			
			}
		
	}
	
	if(empty($_POST["pass1"]) ){
		
		$msg =  "密码不能为空";
		include "tips.php";
		exit;

		}else{
		
			$re = "/^\w+$/";
			$pass1 = $_POST["pass1"];
			if(!preg_match($re,input_fn($pass1))){

				$msg =  "密码格式不正确";
				include "tips.php";
				exit;
			
			}
		
	}
	
	
	if(empty($_POST["pass2"]) ){
		
		$msg =  "确认密码不能为空";
		include "tips.php";
		exit;

		}else{
		
			$re = "/^\w+$/";
			$pass2 = $_POST["pass2"];
			if(input_fn($pass2) != input_fn($pass1)){

				$msg =  "确认密码与输入密码不一致";
				include "tips.php";
				exit;

			}
		
	}
	
	if(empty($_POST["email"]) ){
		
		$msg =  "邮箱不能为空";
		include "tips.php";
		exit;

		}else{
		
			$re = "/^\w+@\w+\.\w+$/";
			$email = $_POST["email"];
			if(!preg_match($re,input_fn($email))){

				$msg =  "邮箱格式不正确";
				include "tips.php";
				exit;
			
			}
		
		
	}
	
	if(empty($_POST["tel"]) ){
		
		$msg =  "手机号不能为空";
		include "tips.php";
		exit;

		}else{
		
			$re = "/^1[3578]\d{9}$/";
			$tel = $_POST["tel"];
			if(!preg_match($re,input_fn($tel))){

				$msg =  "手机号格式不正确";
				include "tips.php";
				exit;
			
			}
		
	}
	
	if($_POST["area"]== '请选择省份'){
		
		$msg =  "请选择省份";
		include "tips.php";
		exit;

		}
		$area = $_POST["area"];
		
	if(empty($_POST["sex"]) ){
		
		$msg =  "性别不能为空";
		include "tips.php";
		exit;

		}
		$sex = $_POST["sex"];
	
	if(empty($_POST["hobby"]) ){
		
		$msg =  "爱好不能为空";
		include "tips.php";
		exit;

		}else{
			$hobbyStr="";
			$hobby = $_POST["hobby"];
			for($i=0;$i<count($hobby);$i++)
			{
				if($i==0)
				{
					$hobbyStr.= $hobby[$i];
				}
				else
				{
					$hobbyStr.= "||".$hobby[$i];
				}
			}
			
	}
	
	if(empty($_POST["read"]))
		{
			$msg = "阅读并接受不能为空";
			include "tips.php";
			exit;
		}else{
			
			$read = $_POST["read"];
			
		}
	
	
	
	$userInfo = $user.'/'.$pass1.'/'.$pass2.'/'.$email.'/'.$tel.'/'.$area.'/'.$sex.'/'.$hobbyStr;
	
	$f = fopen('user.txt','a+');
	
	while($fl = fgets($f)){
		
		$userArr = explode('/',$fl);
		
		if( $userArr[0] == $user){
			
			$msg = "用户名已经存在";
			include "tips.php";
			exit;
			
		}
	}
	if( fwrite($f,$userInfo."\r\n")){
		$_SESSION['user'] = $user;
		$msg = "注册成功";
		$jumpUrl = 'login.php';
		include "tips.php";
	}
	
	
	
	
			
}else{
	
	$msg = "非法提交";
	include "tips.php";
	
	
}
 
function input_fn($date){
	$date = htmlspecialchars($date);
	$date = trim($date);
	$date = stripslashes($date);
	return $date;
	
}



?>



