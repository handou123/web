<?php
include "header.php";

$txt=$_GET['txt'];//搜索的内容
$pageSize=3;
if( empty($_GET['page']) )
{
	$page=1;
	$pageStar=($page-1)*$pageSize;
}
else
{
	$page=$_GET['page'];
	$pageStar=($page-1)*$pageSize;
}

$sql="SELECT * FROM u_article WHERE `contents` LIKE '%$txt%' LIMIT $pageStar,$pageSize";


$sqlTotal="SELECT * FROM u_article WHERE `contents` LIKE '%$txt%'";
$resultTotal=$conn->query($sqlTotal);
$pageTotal=$resultTotal->num_rows;//总条数
$pageNum=ceil($pageTotal/$pageSize);//总页数
?>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="index.php">首页</a></li>
            <li class="active">搜索：<?php echo $txt;?></li>
        </ol>
    </div>
	<!--内容区-->
	<div class="container" id="content">
		<h3>一共搜索到<span style="color: red;"><?php echo $txt;?></span>相关的数据<span style="color: red;"><?php echo $pageTotal; ?></span>条</h3>
		<hr>
		<ul class="container-fluid list-unstyled list-li">
	  	<?php
			
			$i=0;
			$result=$conn->query($sql);
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
        
        <div id="list">
            <nav aria-label="Page navigation" >
                <ul class="pagination" class="container">
                    <li>
                        <a href="searchlist.php?txt=<?php echo $txt;?>&page=<?php echo $page-1;?>" aria-label="Previous" class="<?php if($page==1){echo 'btn disabled';};?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
					for( $j=1;$j<=$pageNum;$j++ )
					{
					
					?>
                    <li class="<?php if($page==$j){echo 'active';};?>">
						<a href="searchlist.php?txt=<?php echo $txt;?>&page=<?php echo $j;?>">
							<?php echo $j;?>
						</a>
                    </li>
                    <?php
						
					}
					?>
                    <li>
                       <!--当前页等于页数总数时，下一页的按钮就禁止点击；-->
                        <a href="searchlist.php?txt=<?php echo $txt;?>&page=<?php echo $page+1;?>" 
                           aria-label="Next" class="<?php if($page==$pageNum){echo 'btn disabled';};?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
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