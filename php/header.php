<?php

session_start();
header("content-type:text/html;charset=utf8");


?>



<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.css">
   
</head>
<body>
<nav class="navbar  navbar-inverse head">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">首页</a></li>
                <li><a href="course.php">前端资讯</a></li>
                <li><a href="change.php">课程选择</a></li>
                <li><a href="vote.php">投票</a></li>
                <li><a href="search.php">搜索</a></li>
                <?php
				
				if(!empty( $_SESSION['user'])){
					
				?>
				
                
                <li><a href="register.php">欢迎用户：<?php  echo $_SESSION['user']; ?></a></li>
                <li><a href="loginout.php">注销</a></li>
                <?php
               
				}else if(!empty($_COOKIE['user']) ){
					
				?>
				
 				<li><a href="register.php">欢迎用户：<?php  echo$_COOKIE['user']; ?></a></li>
                <li><a href="loginout.php">注销</a></li>
                
                <?php
				
                }else{
					
				?>
                
                 <li><a href="register.php">注册</a></li>
                <li><a href="login.php">登录</a></li>
                
                <?php
				
                }
				
                ?>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">关于我们</a></li>
            </ul>
        </div>
    </div>
</nav>