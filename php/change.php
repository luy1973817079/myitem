
 <?php

		include 'header.php';
	
	$conn = new mysqli('localhost','root','root','myitem');
	
	if($conn->connect_error){
		
		die('数据库连接失败');
	}
	
	
	if(empty($_GET['id'])){
		$id = '全部内容';
		$sql = "SELECT * FROM u_article ";
		
	}

	$result = $conn->query($sql);
	
	$rowNum = $result->num_rows;
	$pageSize = 12;
	$pages = ceil($rowNum/$pageSize);
	if(empty($_GET['i'])){
			$pg = 1;
			$pageStart = ($pages-1)*12;
		}else{
			$pg =  $_GET['i'];
			$pageStart = ($pages-1)*12;
		}
	if($id = '全部内容'){
		$sql2 = "SELECT * FROM u_article WHERE u_id = $id ORDER BY u_id LIMIT  $pageSize";
	}
	$result2 = $conn->query($sql2);

?>

   
    <style>
        *{margin: 0;padding: 0;}
        .head{margin-bottom: 0;border-radius: 0;}
        #bs-example-navbar-collapse-1{padding-left: 0;}
        .search{border-bottom: 1px solid #eee;padding-bottom: 9px;}
        .content-img{margin-top: 20px;}
        .footer1{margin-top: 40px;}
        .footer2{background: #f5f5f5;border-top: 1px solid #ddd;padding:15px 0;}
    </style>

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
        <li class="active">前端咨询</li>
    </ul>
</div>

<div class="content">
    <div class="container">
        <select name="option" id="" class="form-control" style="width: 300px;" onChange="change(this.value)">
        	<option>请选择课程</option>
			 <option>Web前端开发</option>
			 <option>UI设计</option>
			 <option>PHP开发</option>
			 <option>JAVA开发</option>
			 <option>网络营销</option>
        </select>
        <div class="content-img" id="div">
            
            
        </div>
    </div>
</div>
<div class="container">
    <div class="footer1">
        <ul class="pager">
            <li style="display: none;"><?php for($i=0;$i<$pages;$i++){echo $i;echo 	$pg = 1;}?></li>
          <li class="previous"  class="<?php if(	$pg == 1){echo 'btn disabled';}?>"><a href="change.php?id=全部内容&page=<?php echo 	$pg-1;?>"><span aria-hidden="true">&larr;</span>Older</a></li>
          <li class="next" class="<?php if(	$pg == 	$pg+1){echo 'btn disabled';}?>"><a href="change.php?d=全部内容&page=<?php echo 	$pg+1;?>">Newer<span aria-hidden="true">&rarr;</span></a></li>
           
					
				
			
            
        </ul>
    </div>
    <div class="footer2">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>
<script>
	
	var oDiv = document.getElementById('div');
	change ('全部内容');
	function change (q){
		
		if(window.XMLHttpRequest){
			
			var oAjax = new XMLHttpRequest();
		}else{
			
			var oAjax = new ActiveXObject('microsoft.XMLHTTP');
		}
		oAjax.open('get','dochange.php?q='+q+'&t='+Math.random(),true);
		
		oAjax.send();
		oAjax.onreadystatechange = function (){
			
			if(oAjax.readyState == 4 && oAjax.status == 200){
				
				 oDiv.innerHTML = oAjax.responseText;
				
			}
		}
	}

</script>

<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>