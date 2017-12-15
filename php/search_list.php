<?php
include 'header.php';
$conn = new mysqli('localhost','root','root','myitem');
if($conn->connect_error){
	
	die('数据库连接失败');
}

$pageSize = 3;
if(empty($_GET['page'])){
	
	$pages =1;
	$pageStart = ($pages-1)*$pageSize;
	
}else{
	
	$pages = $_GET['page'];
	$pageStart = ($pages-1)*$pageSize;
}

/*if(empty($_GET['q'])){
	$q = '全部内容';
}else{
	$q = $_GET['q'];
}*/
	if(!empty($_GET['q'])){
        $q = $_GET['q'];
    }

	$sqlToal = "SELECT * FROM u_article WHERE u_contents LIKE '%$q%'";
	$sql = "SELECT * FROM u_article WHERE u_contents LIKE '%$q%' LIMIT $pageStart,$pageSize";


$resultToal = $conn->query($sqlToal);
$resultNum = $resultToal->num_rows;
$result = $conn->query($sql);

$pageNum = ceil($resultNum/$pageSize);





?>
    <style>
        *{margin: 0;padding: 0;list-style: none;}
        .head{margin-bottom: 0;border-radius: 0;}
        #bs-example-navbar-collapse-1{padding-left: 0;}
        .content{margin-top: 42px;}
        .content h3{border-bottom: 1px solid #eee;padding-bottom: 12px;margin-bottom: 27px;}
        .left{border: none;float: left;}
        .right{border: none;float: right;}
        a.left {color: #337ab7;}
        .foot{text-align: center;}
        .footer{background: #f5f5f5;border-top: 1px solid #ddd;padding:15px 0;text-align: left}
    </style>
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
        <li class="active">搜索到：<?php echo $q;?></li>
    </ul>
    <div class="content">
        <h3>一共搜索到<?php echo $resultNum;?>条关于<?php echo $q;?>的数据</h3>
    </div>
    <div class="list-group ">
     <?php
		
		
		if($result->num_rows>0){
      		
			while($rows = $result->fetch_assoc()){
		
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
		
					}
      
       }else{
       
       		echo '没有搜索到数据';
       }
		
		?>
    </div>
    
</div>
<div class="container foot">
    <ul class="pagination page-list">
        <li><a href=" search_list.php?q=<?php echo $q;?>&page=<?php echo $pages-1;?>" class="<?php if($pages == 1){echo 'btn disabled';}?>"><span>&laquo;</span></a></li>
        <?php
			
		for($i=1;$i<=$pageNum;$i++){
		
		?>
        <li class="<?php if($pages == $i){echo 'active';} ?>"><a href=" search_list.php?q=<?php echo  $q;?>&page=<?php echo $i;?>" ><?php echo $i; ?></a></li>
        <?php
		
		}
		?>
        <li><a href=" search_list.php?q=<?php echo $q;?>&page=<?php echo $pages+1;?> " class="<?php if($pages == $pageNum){echo 'btn disabled';}?>"><span>&raquo;</span></a></li>
    </ul>
    <div class="footer">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>


<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>