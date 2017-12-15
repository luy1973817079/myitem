<?php

$id = $_GET['id'];
$conn = new mysqli('localhost','root','root','myitem');
$sql = "DELETE FROM u_article WHERE u_id=$id";

if( $conn->query($sql) )
{
	$msg = '删除成功';
	$jumpUrl = 'column.php';
	include 'tips.php';
	exit;
};

$conn->close();

?>