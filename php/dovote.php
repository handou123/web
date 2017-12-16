<?php
include "config.php";

$vote=$_GET['vote'];
$str=file_get_contents('vote.txt');
$strArr=explode("|",$str);

switch($vote)
{
	case 0 :$strArr[0]++;
		break;
	case 1 :$strArr[1]++;
		break;
	case 2 :$strArr[2]++;
		break;
	case 3 :$strArr[3]++;
		break;
	case 4 :$strArr[4]++;
		break;
	case 5 :$strArr[5]++;
		break;
	case 6 :$strArr[6]++;
		break;
}
$result=implode("|",$strArr);//将数组拼接成字符串
file_put_contents('vote.txt',$result);//将结果放入vote.txt文件中
//投票的总数
$voteTotal=$strArr[0]+$strArr[1]+$strArr[2]+$strArr[3]+$strArr[4]+$strArr[5]+$strArr[6];
/*每个科目的百分比*/
$pc=round(($strArr[0]/$voteTotal)*100,2);
$yd=round(($strArr[1]/$voteTotal)*100,2);
$js=round(($strArr[2]/$voteTotal)*100,2);
$jq=round(($strArr[3]/$voteTotal)*100,2);
$bt=round(($strArr[4]/$voteTotal)*100,2);
$an=round(($strArr[5]/$voteTotal)*100,2);
$h5=round(($strArr[6]/$voteTotal)*100,2);
?>
		
	
	<h2>各个科目受欢迎的百分比</h2>
	<h5>此数据来自网络<?php echo $voteTotal;?>份用户投票结果</h5>
	<hr>
	<div>
		<h4>PC端网站重构 (<?php echo $pc;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 <?php
				if($pc<25)
				{
					echo "progress-bar-success";
				}
				else if($pc>=25 && $pc<50)
				{
					echo "progress-bar-info";
				}
				else if($pc>=50 && $pc<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			   progress-bar-striped" role="progressbar"
				 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pc;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4>移动端网站重构 (<?php echo $yd;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 <?php
				if($yd<25)
				{
					echo "progress-bar-success";
				}
				else if($yd>=25 && $yd<50)
				{
					echo "progress-bar-info";
				}
				else if($yd>=50 && $yd<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			   progress-bar-striped" role="progressbar"
				 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $yd;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4>JavaScript (<?php echo $js;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			  <?php
				if($js<25)
				{
					echo "progress-bar-success";
				}
				else if($js>=25 && $js<50)
				{
					echo "progress-bar-info";
				}
				else if($js>=50 && $js<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			    progress-bar-striped" role="progressbar"
				 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $js;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4>JQuery (<?php echo $jq;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 	<?php
				if($jq<25)
				{
					echo "progress-bar-success";
				}
				else if($jq>=25 && $jq<50)
				{
					echo "progress-bar-info";
				}
				else if($jq>=50 && $jq<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			  
			    progress-bar-striped" role="progressbar"
				 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jq;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4>Bootstrap (<?php echo $bt;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 	<?php
				if($bt<25)
				{
					echo "progress-bar-success";
				}
				else if($bt>=25 && $bt<50)
				{
					echo "progress-bar-info";
				}
				else if($bt>=50 && $bt<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			  
			    progress-bar-striped" role="progressbar"
				 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $bt;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4>Angular (<?php echo $an;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 	<?php
				if($an<25)
				{
					echo "progress-bar-success";
				}
				else if($an>=25 && $an<50)
				{
					echo "progress-bar-info";
				}
				else if($an>=50 && $an<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?>
			  
			   progress-bar-striped" role="progressbar"
				 aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $an;?>%">
			</div>
		</div>
	</div>
	<div>
		<h4> H5高级课程 (<?php echo $h5;?>%)</h4>
		<div class="progress">
			<div class="progress-bar 
			 
			  	<?php
				if($h5<25)
				{
					echo "progress-bar-success";
				}
				else if($h5>=25 && $h5<50)
				{
					echo "progress-bar-info";
				}
				else if($h5>=50 && $h5<75)
				{
					echo "progress-bar-warning";
				}
				else
				{
					echo "progress-bar-danger";
				}
			 ?> progress-bar-striped" role="progressbar"
				 aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $h5;?>%">
			</div>
		</div>
	</div>
