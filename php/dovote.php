<?php
header('content-type:text/html;charset=utf8');

$q = $_GET['q'];
$voteStr = file_get_contents('classvote.txt');
$voteArr = explode(':',$voteStr);

switch($q){
		
	case 0: $voteArr[0]++;break;
	case 1: $voteArr[1]++;break;
	case 2: $voteArr[2]++;break;
	case 3: $voteArr[3]++;break;
	case 4: $voteArr[4]++;break;
	case 5: $voteArr[5]++;break;
	case 6: $voteArr[6]++;break;
	
}

$voteToal = $voteArr[0]+$voteArr[1]+$voteArr[2]+$voteArr[3]+$voteArr[4]+$voteArr[5]+$voteArr[6];
$resultStr = implode(':',$voteArr);
file_put_contents('classvote.txt',$resultStr );
$pc = round(($voteArr[0]/$voteToal)*100,2);
$yd = round(($voteArr[1]/$voteToal)*100,2);
$js = round(($voteArr[2]/$voteToal)*100,2);
$jq = round(($voteArr[3]/$voteToal)*100,2);
$bt = round(($voteArr[4]/$voteToal)*100,2);
$an = round(($voteArr[5]/$voteToal)*100,2);
$h5 = round(($voteArr[6]/$voteToal)*100,2);
?>
  <h4>pc端网站重构（<?php echo $pc;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped
        <?php
					
			if($pc<25){
				echo 'progress-bar-success';
        	}else if($pc>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($pc>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>
        
           " style="width:<?php echo $pc;?>%"><span class="sr-only"><?php echo $pc; ?>%</span>
        </div>
    </div>
    <h4>移动端网站重构（<?php echo $yd;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped 
		<?php
					
			if($yd<25){
				echo 'progress-bar-success';
        	}else if($yd>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($yd>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>
       " style="width:<?php echo $yd;?>%">
        </div>
    </div>
    <h4>JavaScript（<?php echo $js;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped
			<?php
					
			if($js<25){
				echo 'progress-bar-success';
        	}else if($js>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($js>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>		
       
       " style="width:<?php echo $js;?>%">
        </div>
    </div>
    <h4>JQuery（<?php echo $jq;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped 
			<?php
					
			if($jq<25){
				echo 'progress-bar-success';
        	}else if($jq>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($jq>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>		
       
       " style="width:<?php echo $jq;?>%">
        </div>
    </div>
    <h4>Bootstrap（<?php echo $bt;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped 
			<?php
					
			if($bt<25){
				echo 'progress-bar-success';
        	}else if($bt>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($bt>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>		
       
       " style="width:<?php echo $bt;?>%">
        </div>
    </div>
    <h4>Angular（<?php echo $an;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped 
			<?php
					
			if($an<25){
				echo 'progress-bar-success';
        	}else if($an>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($an>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>		
       
       " style="width:<?php echo $an;?>%">
        </div>
    </div>
    <h4>H5高级课程（<?php echo $h5;?>%）</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped 
			<?php
					
			if($h5<25){
				echo 'progress-bar-success';
        	}else if($h5>=25 && $pc<50){
				echo 'progress-bar-info';
			}else if($h5>=50 && $pc<75){
				echo 'progress-bar-warning';
			}else{
				echo 'progress-bar-danger';
			}		
		?>		
       
       " style="width:<?php echo $h5;?>%">
        </div>
    </div>