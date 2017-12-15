<?php


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
    <style>
        *{margin: 0;padding: 0;}
        .head{margin-bottom: 0;border-radius: 0;}
        #bs-example-navbar-collapse-1{padding-left: 0;}
        .content-head{border-bottom: 1px solid #eee;padding-bottom: 22px;}
        .content-img{margin-top: 20px;}
        .content-img h4{color: #337ab7;}
        table{margin-top: 20px; margin-bottom: 20px;}
        .footer2{background: #f5f5f5;border-top: 1px solid #ddd;padding:15px 0;}
    </style>
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
        </div>S
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="../html/index.html">首页</a></li>
                <li><a href="#">前端资讯</a></li>
                <li><a href="#">课程选择</a></li>
                <li><a href="#">投票</a></li>
                <li><a href="#">搜索</a></li>
                <?php
				
				if(!empty( $_SESSION['user'])){
					
				?>
				
                
                <li><a href="../html/sql-register.html">欢迎用户：<?php  echo $_SESSION['user']; ?></a></li>
                <li><a href="loginout.php">注销</a></li>
                <?php
               
				}else if(!empty($_COOKIE['user']) ){
					
				?>
				
 				<li><a href="../html/sql-register.html">欢迎用户：<?php  echo$_COOKIE['user']; ?></a></li>
                <li><a href="loginout.php">注销</a></li>
                
                <?php
				
                }else{
					
				?>
                
                 <li><a href="../html/sql-register.html">注册</a></li>
                <li><a href="../html/sql-login.html">登录</a></li>
                
                <?php
				
                }
				
                ?>
                
                
                
                
                
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="banner">
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../images/class-img1.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="../images/class-img2.jpg" alt="...">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="content-head">
            <h3>Web前端课程推荐</h3>
            <p>这些项目是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
        </div>
        <div class="content-img">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-1.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                        和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-2.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-3.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-4.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-1.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-2.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-3.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="../images/class-content-4.jpg" alt=""></a>
                        <h4>Dreamweaver</h4>
                        <p style="color: #777;">网页制作基础</p>
                        <p>DW是第一套针对专业网页设计师特别发展的视觉化开发工具，利用它可以轻而易举地制作出跨越平台限制
                            和跨越浏览器限制的.......</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-head">
            <h3>Web前端课程推荐</h3>
            <p>这些项目是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>班级名称</th>
                <th>课时</th>
                <th>价格</th>
                <th>免费试听</th>
                <th>购买课程</th>
            </tr>
            <tr>
                <td>就业精品班（面授/封闭班/包食宿）</td>
                <td>4个月</td>
                <td>优惠价17800.00<del>原价17800.00</del></td>
                <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                <td><button class="btn btn-danger">立即报名</button></td>
            </tr>
            <tr>
                <td>就业精品班（面授/封闭班/包食宿）</td>
                <td>4个月</td>
                <td>优惠价17800.00<del>原价17800.00</del></td>
                <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                <td><button class="btn btn-danger">立即报名</button></td>
            </tr>
            <tr>
                <td>就业精品班（面授/封闭班/包食宿）</td>
                <td>4个月</td>
                <td>优惠价17800.00<del>原价17800.00</del></td>
                <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                <td><button class="btn btn-danger">立即报名</button></td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="footer2">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>


<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>
