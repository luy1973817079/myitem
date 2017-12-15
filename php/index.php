<?php
include 'header.php';

?>
<link rel="stylesheet" href="../css/index.css">
<div class="banner">
    <div class="container">
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
</div>
<div class="content">
    <div class="container">
        <div class="content-head">
            <h3>Web前端课程推荐</h3>
            <p>这些项目是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
        </div>
        <div class="content-img">
            <div class="row">


                <?php

                $conn = new mysqli('localhost','root','root','myitem');
                if($conn->connect_error){

                    die('数据库连接失败');
                }

                //echo '数据库连接成功';

                $sql = 'SELECT *FROM u_article ORDER BY  u_id DESC LIMIT 8';
                $result = $conn->query($sql);
                while($rows = $result->fetch_assoc()){

                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href=" content.php?id=<?php echo $rows['u_id']; ?>" target="_blank"><img src="<?php echo $rows['u_thumb']; ?>";  alt="<?php echo $rows['u_title']; ?>"  style="width: 253px;height: 142px;"></a>
                            <h4><a href="content.php?id=<?php echo $rows['u_id']; ?>" target="_blank"
                                   title="<?php echo $rows['u_title']; ?>"><?php echo mb_substr($rows['u_title'],0,9,'utf8'); ?></a></h4>
                            <p style="color: #777;"><a href="list.php?column=<?php echo $rows['u_column']; ?>" target="_blank"><?php echo $rows['u_column']; ?></a></p>
                            <p><?php echo mb_substr($rows['u_description'],0,30,'utf8'); ?></p>
                        </div>
                    </div>


                    <?php


                }

                ?>

            </div>
            <div class="content-head">
                <h3>Web前端课程推荐</h3>
                <p>这些项目是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>班级名称</th>
                    <th>课时</th>
                    <th>价格</th>
                    <th>免费试听</th>
                    <th>购买课程</th>
                </tr>
                <tr>
                    <td>就业精品班（面授/封闭班/包食宿）</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价17800.00</del></td>
                    <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                    <td><button class="btn btn-danger">立即报名</button></td>
                </tr>
                <tr>
                    <td>就业精品班（面授/封闭班/包食宿）</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价17800.00</del></td>
                    <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                    <td><button class="btn btn-danger">立即报名</button></td>
                </tr>
                <tr>
                    <td>就业精品班（面授/封闭班/包食宿）</td>
                    <td>4个月</td>
                    <td>优惠价17800.00<del>原价17800.00</del></td>
                    <td ><span class="glyphicon glyphicon-headphones"></span>预约</td>
                    <td><button class="btn btn-danger">立即报名</button></td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="footer2">
            Copyright1999-2016 北京中公教育科技股份有限公司.All Rights Reserved 京ICP证161188号
        </div>
    </div>


    <script src="../../../bootstrap/js/jquery.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.js"></script>
    </body>
    </html>
