<?php


$conn = new mysqli('localhost','root','root','myitem');

if($conn->connect_error){
	
	die('数据库连接失败');
}

$q = $_GET['q'];
if($q == '全部内容'){
	
	$sql = "SELECT * FROM u_article LIMIT 12";
}else{
	
	$sql = "SELECT * FROM u_article WHERE u_column = '$q'LIMIT 12";
}

$result = $conn->query($sql);
?>
<div class="row">
   <?php
	
	if($result->num_rows>0){
		
		while($rows=$result->fetch_assoc()){
			
	?>
    
     <div class="col-md-3">
          <div class="thumbnail">
             <a href="content.php?id=<?php echo $rows['u_id']; ?>"><img src="<?php echo $rows['u_thumb']?>" alt="<?php echo $rows['u_title'];?>" style="width: 252px;height:141px;"></a>
           </div>
      </div>
      
      <?php
	      
				}
    }else{
   
    	echo '没有查询到数据';
    }
				
	?>
</div>           