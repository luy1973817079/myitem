<?php

$host = 'localhost';
$hostuser = 'root';
$hostpass = 'root';
$database = 'myitem';

header("content-type:text/html;charset=utf8");

$conn = new mysqli($host,$hostuser,$hostpass,$database);

if($conn->connect_error ){
	
	die('数据库连接失败');
	
}
//echo '数据库连接成功';

	$sql ="CREATE TABLE i_userinfo(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user VARCHAR(30) NOT NULL,
	pass VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	tel VARCHAR(15),
	area VARCHAR(50),
	sex VARCHAR(4),
	hobby VARCHAR(30),
	reg_date TIMESTAMP
)";

if($conn->query($sql)){
	
	echo '创表成功';
}




?>