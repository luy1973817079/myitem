
<?php
include 'header.php';

?>


<link rel="stylesheet" href="../css/register.css">
	 <script>
		window.onload = function () {

            var oForm = document.getElementsByTagName("form")[0];
            var oUser = oForm.user;
            console.log(oUser);
            var oPass1 = oForm.pass1;
            var oPass2 = oForm.pass2;
            var oEmail = oForm.email;
            var oTel = oForm.tel;
            var oArea = oForm.area;
            var oSex = oForm.sex;
            var oHobby = oForm ['hobby[]'];
            var oRead = oForm.read;

            oForm.onsubmit = function () {
                //return false;

                if (oUser.value == '') {
                    alert('用户名不能为空');
                    return false;
                } else {
                    var re = /^[a-zA-Z]+$/;
                    if (!re.test(oUser.value)) {
                        alert('用户名格式不正确');
                        return false;
                    }
                }

                if (oPass1.value == '') {
                    alert('密码不能为空');
                    return false;
                } else {
                    var re = /^\w+$/;
                    if (!re.test(oPass1.value)) {
                        alert('密码格式不正确');
                        return false;
                    }
                }
                if (oPass2.value == '') {
                    alert('确认密码不能为空');
                    return false;
                } else {
                    if (oPass1.value != oPass2.value) {
                        alert('确认密码与输入不一致');
                        return false;
                    }
                }


                if (oEmail.value == '') {

                    alert('邮箱不能为空');
                    return false;
                } else {

                    var re = /^\w+@\w+\.\w+$/;
                    if (!re.test(oEmail.value)) {

                        alert('邮箱格式不正确');
                        return false;
                    }
                }


                if (oTel.value == '') {

                    alert('电话不能为空');
                    return false;
                } else {

                    var re = /^1[35789]\d{9}$/;
                    if (!re.test(oTel.value)) {
                        alert('电话格式不正确');
                        return false;
                    }
                }


                if (oArea.value == '请选择省份') {

                    alert(oArea.value);
                    return false;
                }


                var sexFlag = false;
                for (var i = 0; i < oSex.length; i++) {

                    if (oSex[i].checked) {
                        sexFlag = true;
                    }
                }

                if (!sexFlag) {

                    alert('请选择性别');
                    return false;
                }


                var hobbyFlag = false;
                for (var i = 0; i < oHobby.length; i++) {

                    if (oHobby[i].checked) {

                        hobbyFlag = true;
                    }
                }

                if (!hobbyFlag) {

                    alert('爱好不能为空');
                    return false;
                }


                if (!oRead.checked) {

                    alert('请认真阅读协议');
                    return false;
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
            <li class="active">注册</li>
        </ul>
        <div class="content">
            <h3>用户注册</h3>
        </div>
        <form class="form-horizontal content-form" action="doregister.php" method="post">
            <div class="form-group">
                <label for="usrename" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" id="usrename" class="form-control" placeholder="用户名" name="user">
                </div>
            </div>
            <div class="form-group">
                <label for="password1" class="col-sm-2 control-label">输入密码</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password1" placeholder="输入密码" name="pass1">
                </div>
            </div>
            <div class="form-group">
                <label for="password2" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pass2" placeholder="确认密码" 
                    name="pass2">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-2 control-label">手机号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel" placeholder="手机号" name="tel">
                </div>
            </div>
            
           
            <div class="form-group">
                <label for="selecet" class="col-sm-2 control-label">地区</label>
                <div class="col-sm-10">
                    <select  id="selecet" class="form-control" name="area">
                        <option>请选择省份</option>
                        <option  >河北</option>
                        <option >山东</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">性别</label>
                <div class="radio">
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="sex"  value="男" >男
                        </label>
                        <label>
                            <input type="radio" name="sex" value="女">女
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">爱好</label>
                <div class="checkbox">
                    <div class="col-sm-10">
                        <label>
                            <input type="checkbox" id="checkbox1" value="音乐" name="hobby[]">音乐
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox2" value="旅游" name="hobby[]">旅游
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox3" value="登山" name="hobby[]">登山
                        </label>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <div class="col-sm-offset-2 col-sm-10">
                    <label >
                        <input type="checkbox"  value="阅读并接受" name="read">阅读并接受<a href="#">《用户协议》</a>
                    </label>
                </div>
            </div>
            <div class="form-group but">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">注册</button>
                    <button type="reset" class="btn btn-default">重置</button>
                  <a href="login.html" class="btn btn-danger">已有账号，去登录</a>
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