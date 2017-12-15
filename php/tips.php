<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
	*{margin: 0;padding: 0;}
	.box{width: 400px;height: 200px; border: 1px solid black;margin: 300px auto;}
	.box h4{width: 100%;height: 60px;background:black;color: #fff;text-align: center;line-height: 60px;}
	.content{width: 100%;height: 140px;text-align: center; line-height: 50px;}
	.content div{color: red;font-weight: bold;}
</style>
<script>
	
	window.onload = function (){
		
		var oSpan = document.getElementsByTagName("span")[0];
		var oUrl = document.getElementById("url");
		var time = 3;
	
		var timer = setInterval(function(){
			
			time--;
			
			if( time <= 0 ){
				window.location =  oUrl.href;
//				time = 0;
				clearInterval( timer );
				 
			}
			oSpan.innerHTML = time;
			
			
		},1000)
		
	}
	
</script>
</head>

<body>
<div class="box">
	<h4>提示内容</h4>
	<div class="content">
		<div><?php echo $msg; ?></div>
		<p>页面自动<a href="<?php echo $jumpUrl; ?>" id="url">跳转</a>等待时间<span>3</span>秒</p>
	</div>
</div>
</body>
</html>