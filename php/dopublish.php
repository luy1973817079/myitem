<?php

session_start();
header("Content-type:text/html;charset=utf8");

$msg = '';
$jumpUrl = '';

$host = 'localhost';
$hostuser = 'root';
$hostpass = 'root';
$database = 'myitem';
$conn = new mysqli($host,$hostuser,$hostpass,$database);

if( $conn->connect_error )
{
	die('数据库连接失败');
};


$dir = 'upload/';

if( $_SERVER['REQUEST_METHOD']=='POST' )
{

$title = $_POST['title'];
$column = $_POST['column'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$contents = $_POST['editorValue'];
	
	//1判断错误
	if( $_FILES['upfile']['error']==0 )
	{
		
		//2 自定义大小
		$fileMaxSize = 1*1024*1024;
		if($_FILES['upfile']['size']>$fileMaxSize)
		{
			$msg = '上传文件过大';
			$jumpUrl = 'publish.php';
			include 'tips.php';
			exit;
		};
		
		//3 文件类型
		
		$imgArr = [
			'image/jpeg',
			'image/png',
			'image/gif'
		];
		$fileType = $_FILES['upfile']['type'];
		
		if( !in_array($fileType,$imgArr) )
		{
			$msg = '文件类型错误';
			$jumpUrl = 'publish.php';
			include 'tips.php';
			exit;
		};
		
		//4文件命名
		$fileNameArr = explode('.',$_FILES['upfile']['name']);
		$fileSuffix = array_pop($fileNameArr);
		$newFileName = date('YmdHis').rand(1000,9999).'.'.$fileSuffix;
		
		
		
		 move_uploaded_file($_FILES['upfile']['tmp_name'],$dir.$newFileName );
		 
		 $thumb = 'upload/'.$newFileName;
		 $dtime = time();
		 
		 
		$sql = "INSERT INTO `u_article` (`u_title`,`u_column`,`u_description`,`u_keywords`,`u_contents`,`u_thumb`,`u_add_date`) VALUES('$title','$column','$description','$keywords','$contents','$thumb','$dtime')";
		
		
		 if( $conn->query($sql) )
		 {
			$msg = '发布成功';
			$jumpUrl = 'column.php';
			include 'tips.php';
			exit;
		 }
		 else
		 {
			echo $conn->error;	
		 };
		
	}
	else
	{
		$msg = '上传文件失败';
		$jumpUrl = 'publish.php';
		include 'tips.php';
		exit;
	};
	
	
	
}
else
{
	$msg = '不允许非法提交';
	$jumpUrl = 'publish.php';
	include 'tips.php';
	exit;
};



?>