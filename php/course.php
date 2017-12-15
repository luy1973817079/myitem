<?php
	
include 'header.php';

$conn = new mysqli('localhost','root','root','myitem');

if($conn->connect_error){
	
	die('数据库连接失败');
}


?>
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
            <li class="active"><?php echo $column = 'Web前端开发' ?></li>
        </ul>
     
    <div class="row">
       
        <div class="col-md-6">
            <div class="list-group">
                <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user"></span><?php echo $column = 'Web前端开发' ?></li>
                <?php
					$sql = "SELECT * FROM u_article  WHERE u_column = 'Web前端开发' LIMIT 2";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rows = $result->fetch_assoc()){

				?>
                <li class="list-group-item"><a href="content.php?id=<?php echo $rows['u_id']; ?>"><?php echo $rows['u_title']; ?></a></li>
                <?php
					}

				}else{

					echo '没有搜索到数据';
				}
			?>
            </div>
        </div>
           <div class="col-md-6">
            <div class="list-group">
                <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user"></span><?php echo $column = 'UI设计' ?></li>
                <?php
					$sql = "SELECT * FROM u_article  WHERE u_column = 'UI设计' LIMIT 2";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rows = $result->fetch_assoc()){

				?>
                <li class="list-group-item"><a href="content.php?id=<?php echo $rows['u_id']; ?>"><?php echo $rows['u_title']; ?></a></li>
                <?php
					}

				}else{

					echo '没有搜索到数据';
				}
			?>
            </div>
        </div>
    </div>
   
         
  
       
         <div class="row">
       
        <div class="col-md-6">
            <div class="list-group">
                <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user"></span><?php echo $column = 'PHP开发' ?></li>
                <?php
					$sql = "SELECT * FROM u_article  WHERE u_column = 'PHP开发' LIMIT 2";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rows = $result->fetch_assoc()){

				?>
                <li class="list-group-item"><a href="content.php?id=<?php echo $rows['u_id']; ?>"><?php echo $rows['u_title']; ?></a></li>
                <?php
					}

				}else{

					echo '没有搜索到数据';
				}
			?>
            </div>
        </div>
         <div class="col-md-6">
            <div class="list-group">
                <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user"></span><?php echo $column = 'JAVA开发' ?></li>
                <?php
					$sql = "SELECT * FROM u_article  WHERE u_column = 'JAVA开发' LIMIT 2";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rows = $result->fetch_assoc()){

				?>
                <li class="list-group-item"><a href="content.php?id=<?php echo $rows['u_id']; ?>"><?php echo $rows['u_title']; ?></a></li>
                <?php
					}

				}else{

					echo '没有搜索到数据';
				}
			?>
            </div>
        </div>
    </div>
       
       
         <div class="row">
       
        <div class="col-md-6">
            <div class="list-group">
                <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user"></span><?php echo $column = '网络营销' ?></li>
                <?php
					$sql = "SELECT * FROM u_article  WHERE u_column = '网络营销' LIMIT 2";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rows = $result->fetch_assoc()){

				?>
                <li class="list-group-item"><a href="content.php?id=<?php echo $rows['u_id']; ?>"><?php echo $rows['u_title']; ?></a></li>
                <?php
					}

				}else{

					echo '没有搜索到数据';
				}
			?>
            </div>
        </div>
         
    </div>
        <div class="footer">
            Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
        </div>
    </div>



    <script src="../../../bootstrap/js/jquery.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>