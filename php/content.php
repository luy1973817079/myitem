<?php

include 'header.php';

$conn = new mysqli('localhost','root','root','myitem');

if( $conn->connect_error){
	
	die('数据库连接失败');
}
$id =$_GET['id'];
$sql = "SELECT*FROM u_article WHERE u_id = $id";
$result = $conn->query($sql);
$rows = $result->fetch_assoc();

?>

<link rel="stylesheet" href="../css/content.css">
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
            <li><a href="#"><?php echo $rows['u_column']; ?></a></li>
            <li class="active"><?php echo $rows['u_title']; ?></li>
            
        </ul>
        <div class="content">
            <div class="content-head">
                <h3><?php echo $rows['u_title']; ?></h3>
                <p>作者：<mark><?php echo $rows['u_author']; ?></mark>发布日期：<mark><?php echo date('Y-m-d H:i:s',$rows['u_add_date']); ?></mark></p>
            </div>
            <div class="content-text">
                <?php echo $rows['u_contents']; ?>
            </div>
        </div>
        <div class="list-group">
            <li class="list-group-item list-group-item-success">相关文章</li>
            <li class="list-group-item "><a href="#"><span class="glyphicon glyphicon-star-empty"></span>2016年1月28日荣获：大众点评2015“
                十佳职业技术培训</a></li>
            <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-star-empty"></span>2016年1月28日荣获：大众点评2015“
                十佳职业技术培训</a></li>
            <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-star-empty"></span>2016年1月28日荣获：大众点评2015“
                十佳职业技术培训</a></li>
            <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-star-empty"></span>2016年1月28日荣获：大众点评2015“
                十佳职业技术培训</a></li>
        </div>
    <div class="footer">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>



<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>