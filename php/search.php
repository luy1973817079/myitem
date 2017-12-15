
 <?php

	include 'header.php';
	$conn = new mysqli('localhost','root','root','myitem');
	if($conn->connect_error){

		die('数据库连接失败');
	}

?>

 <link rel="stylesheet" href="../css/search.css">
<div class="container">
    <div class="banner">
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
    <ul class="breadcrumb">
        <li ><a href="#">首页</a></li>
        <li class="active">搜索</li>
    </ul>
    <form class="form-horizontal search" method="get" action="search_list.php">
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-3" style="padding-right: 10px">
                <label for="text" class="col-sm-2 control-label sr-only">请输入要搜索的内容</label>
                <input type="text" id="text" class="form-control" placeholder="请输入要搜索的内容" name ='q'>
            </div>
            <div class="col-sm-5" style="padding-left: 0;padding-top: 5px">
                <button class="btn btn-default">搜索</button>
            </div>
        </div>
    </form>
    <div class="footer">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>



<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>