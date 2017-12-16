<?php
include "header.php";

if( empty($_GET["column"]) )
{
	$column='全部内容';
}
else
{
	$column=$_GET["column"];
}
$pageSize=3;//每页显示3条
//判断地址栏有没有page当前页
if( empty($_GET['page']) )
{
	$pages=1;//当前页面为1
	$pageStar=($pages-1)*$pageSize;//每页开始的位置
}
else
{
	$pages=$_GET['page'];
	$pageStar=($pages-1)*$pageSize;//每页开始的位置
}



if( $column=='全部内容' )
{
	$sql="SELECT * FROM u_article LIMIT $pageStar,$pageSize";
	$sqlTotal="SELECT * FROM u_article";
}
else
{
	$sql="SELECT * FROM u_article WHERE `column`='$column' LIMIT $pageStar,$pageSize";//column为关键字  因此要加上``
	$sqlTotal="SELECT * FROM u_article WHERE `column`='$column'";
}
$resultTotal=$conn->query($sqlTotal);
$totalNum=$resultTotal->num_rows;//总条数
$pageNum=ceil($totalNum/$pageSize);//页数   向上取整
?>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="index.php">首页</a></li>
            <li class="active"><?php echo $column;?></li>
        </ol>
    </div>
	<!--内容区-->
	<div class="container" id="content">
		<h2><?php echo $column;?></h2>
		<hr>
		<ul class="container-fluid list-unstyled list-li">
	  	<?php
			$result=$conn->query($sql);
			$i=0;
			if($result->num_rows>0)
			{
				while( $rows=$result->fetch_assoc() )
				{
					//每循环一次 加一次
					$i++;
		?>
		  <li class="row">
			  <a href="content.php?id=<?php echo $rows['id']; ?>" class="col-md-10" >
			  <?php echo $rows['title']?>
			  </a>
			  <span class="col-md-2">
			  <?php echo date('Y-m-d H:i:s',$rows['add_date']);?>
			  </span>
		  </li>
		<?php	
					//每5个li一组  加一个分割线
					if( $i%5==0 )
					{
						echo "<li class='li_line'></li>";
					}
				}
			}
			else
			{
				echo '没有数据';
			}
		?>
		</ul>
           
		<nav aria-label="Page navigation" class="text-center">
			<ul class="pagination">
				<li>
					<a class="<?php if($pages==1){echo 'btn disabled';};?>" href="list.php?column=<?php echo $column;?>&page=<?php echo $pages-1;?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<?php
				for( $j=1;$j<=$pageNum;$j++ )
				{

				?>
				<li class="<?php if($pages==$j){echo 'active';};?>"><a href="list.php?column=<?php echo $column;?>&page=<?php echo $j;?>"><?php echo $j;?></a></li>
				<?php

				}
				?>
				<li>
				   <!--当前页等于页数总数时，下一页的按钮就禁止点击；-->
					<a class="<?php if($pages==$pageNum){echo 'btn disabled';};?>" href="list.php?column=<?php echo $column;?>&page=<?php echo $pages+1;?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
    <!--底部-->
    <footer class="container">
        Copyright1999-2016北京中公教育科技股纷有限公司 .All Rights Reserved 京ICP证161188号
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>