<?php

include 'header.php';

$conn = new mysqli('localhost','root','root','myitem');
if( $conn->connect_error){
	
	die('数据库连接失败');
}

if( empty($_GET['column'])){
	
	$column = '全部内容';
}else{
	$column = $_GET['column'];
}

$columnNums = 3;//每页有三条
if(empty($_GET['page'])){
	
	$page = 1;
	$pageStart = ($page-1)*3;
}else{
	
	$page = $_GET['page'];
	$pageStart = ($page-1)*3;
}


if($column == '全部内容'){
	
	$sqlToal = "SELECT *FROM u_article";
	$sql = "SELECT *FROM u_article LIMIT $pageStart,$columnNums";
	
}else{
	$sqlToal = "SELECT *FROM u_article WHERE u_column = '$column' ";
	$sql = "SELECT *FROM u_article WHERE u_column = '$column'  LIMIT $pageStart,$columnNums";
}

$result = $conn->query($sql);
$resultToal = $conn->query($sqlToal);
//echo $_GET['column'];
//每三个一页；
$i=0;

$numTotal = $resultToal->num_rows;//总的数据条数
$pageNum = ceil($numTotal/$columnNums);//总的页数
?>
<link rel="stylesheet" href="../css/list.css">

<div class="container ">
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
        <li class="active"><?php echo $column; ?></li>
    </ul>
    <div class="content">
        <h3><?php echo $column; ?></h3>
    </div>
 
    <div class="list-group ">
      <?php
		if($result->num_rows>0){
			while($rows = $result->fetch_assoc()){
				$i++;
	 ?>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <a href="content.php?id=<?php echo $rows['u_id']; ?>" class="list-group-item  left"><?php echo $rows['u_title']; ?></a>
                    <a href="#" class="list-group-item  right"><?php echo date('Y-m-d H:i:s',$rows['u_add_date']); ?></a>
                </p>
            </div>
        </div>
		<?php 	
			
				if($i%5 == 0){
					
					echo '<li class="li-line"></li>';
				}
				
			}
			
		}else{
			echo '没有数据';
		}?>
    </div>

</div>
<div class="container foot">
    <ul class="pagination page-list">
        <li><a href="list.php?column=<?php echo $column;?>&page=<?php echo $page-1; ?>" class="<?php if($page == 1){ echo 'btn disabled';}?>"<span>&laquo;</span></a></li>
        <?php
		for($j=1;$j <= $pageNum;$j++){
        
		?>
        
        <li class="<?php if($page == $j ){ echo 'active';};?>"><a href="list.php?column=<?php echo $column;?>&page=<?php echo $j; ?>"><?php echo $j;?></a></li>
        <?php
		 }
		?>
        
        <li ><a href="list.php?column=<?php echo $column;?>&page=<?php echo $page+1; ?>" class="<?php if($page==$pageNum ){echo 'btn disabled';}?> "><span>&raquo;</span></a></li>
    </ul>
    <div class="footer">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>


<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>