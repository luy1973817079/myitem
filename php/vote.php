
<?php
	
	include 'header.php';


?>
<link rel="stylesheet" href="../css/vote.css">

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
        <li class="active">投票</li>
    </ul>
    
    <div id="div">
    	<div class="context-head">
        <h3>请选择你喜欢的课程</h3>
        <p>你觉得你比较喜欢下列哪个课程，请选择</p>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="0">pc端网站重构
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="1">移动端网站重构
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="2">JvavaScript
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                            <input type="radio"  name="class" value="3">JQuery
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="4">Bootstrap
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="5">Angular
                    </label>
                </div>
            </div>
            <div class="radio">
                <div class="col-sm-12">
                    <label>
                        <input type="radio"  name="class" value="6">H5高级课程
                    </label>
                </div>
            </div>
            <div class="col-sm-12">
        		<input type="button" class="btn btn-success" value="投票" id="btn">
        	</div>
        </div>
        
    </form>
    
    </div>
  
    <div class="footer">
        Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
    </div>
</div>
<script>
	
	var oBtn = document.getElementById("btn");
	var oDiv = document.getElementById("div");
	var oClass = document.getElementsByName("class");
	console.log(oBtn);
	console.log(oClass);
	
	oBtn.onclick = function (){
		
	
		var q = '';
		for(var i=0;i<oClass.length;i++){
			
			if(oClass[i].checked){
				
				q = oClass[i].value;
				console.log(q);
			}
		}
		if(window.XMLHttpRequest){
			
			var oAjax = new XMLHttpRequest();
		}else{
			
			var oAjax = new ActiveXObject('micrsoft.XMLHTTP');
		}
		
		oAjax.open('get','dovote.php?q='+q+'&t='+Math.random(),true);
		oAjax.send();
		oAjax.onreadystatechange = function (){
			
			if(oAjax.readyState == 4 && oAjax.status == 200){
				
				oDiv .innerHTML = oAjax.responseText;
			}
		}
	}
	

</script>


<script src="../../../bootstrap/js/jquery.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.js"></script>
</body>
</html>