<?php
session_start();

if( empty($_SESSION['username']) )
{
	$msg = '请登录';
	$jumpUrl = 'admin.php';
	include 'tips.php';
	exit;
};

$conn = new mysqli( 'localhost','root','root','myitem');

$sql = "SELECT * FROM u_article";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理系统</title>
	<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.css">
</head>

<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：<?php echo $_SESSION['username']; ?><a href="login_out.php">注销</a></small></h2>
   		</div>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="#">Web前端开发</a></li>
                  <li class="list-group-item"><a href="#">UI设计</a></li>
                  <li class="list-group-item"><a href="#">PHP开发</a></li>
                  <li class="list-group-item"><a href="#">JAVA开发</a></li>
                  <li class="list-group-item"><a href="#">网络营销</a></li>
                  <li class="list-group-item list-group-item-success"><a href="publish.php">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
            
            	<table class="table">
                    <tr>
                        <th>id</th>
                        <th>文章标题</th>
                        <th>发布日期</th>
                        <th>操作</th>
                    </tr>
                    <?php
					
					 while($rows = $result->fetch_assoc()){
                  
					
					?>
                  
                    <tr>
                        <td><?php echo $rows['u_id']; ?></td>
                        <td><?php echo $rows['u_title']; ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$rows['u_add_date']); ?></td>
                        <td><a href="remove.php?id=<?php echo $rows['u_id']; ?>">删除</a> <a href="update.php?id=<?php echo $rows['u_id']; ?>">修改</a></td>
                     
					</tr>
                    <?php
						 
						  }
					?>             
                
                </table>

            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
     <script src="../../../bootstrap/js/jquery.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>