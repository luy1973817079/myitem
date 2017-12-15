
<?php
include 'header.php';

?>
    <link rel="stylesheet" href="../css/login.css">
    
    <script>
		window.onload = function (){
			var oForm = document.getElementById("form");
			var oUser = oForm.user;
			var oPass = oForm.pass;
			
			oForm.onsubmit = function (){
				if(oUser.value == ""){
					alert("用户名不能为空");
					return false;
				
				}else{
					var re = /^[a-zA-Z]+$/ig;
					if(! re.test(oUser.value)){
						alert("用户名格式不正确");
						return false;
						
					}
					
				}
				if(oPass.value == ""){
					alert("密码不能为空");
					return false;
				}else{
					
					var re = /^\w+$/ig;
					if(! re.test(oUser.value)){
						alert("密码格式不正确");
						return false;
						
					}
				}
			}
			
		}
	</script>

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
                    <img src="../../../img/class-img1.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="../../../img/class-img2.jpg" alt="...">
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
        <li class="active">登录</li>
    </ul>
    <div class="content">
        <h3>用户登录</h3>
    </div>
    <form class="form-horizontal content-form" method="post" action="../php/dologin.php" id="form">
        <div class="form-group">
            <label for="usrename" class="col-sm-2 control-label" name="user">用户名</label>
            <div class="col-sm-10">
                <input type="text" id="usrename" class="form-control" placeholder="用户名" name="user">
            </div>
        </div>
        <div class="form-group">
            <label for="password1" class="col-sm-2 control-label" name="pass">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password1" placeholder="输入密码" name="pass">
            </div>
        </div>
        
         <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
           	<label >
            	<input type="checkbox" name="freeLogin">五天免登录
            </label>
           </div>
        </div>
        <div class="form-group but">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submitn" class="btn btn-success">登录</button>
                <button type="reset" class="btn btn-default">重置</button>
                <a href="4register.html" class="btn btn-danger">还没账号，去注册</a>
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