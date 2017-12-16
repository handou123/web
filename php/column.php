<?php
include 'head.php';

if( empty( $_GET['column'] ) )
{
	$column='全部内容';
}
else
{
	$column=$_GET['column'];
	
}
if( $column=='全部内容' )
{
	$sql="SELECT * FROM u_article ORDER BY id DESC";
}
else
{
	$sql="SELECT * FROM u_article WHERE `column`='$column' ORDER BY id DESC";
}
$result=$conn->query($sql);

?>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="column.php?column=<?php echo 'Web前端开发';?>">Web前端开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=<?php echo 'UI设计';?>">UI设计</a></li>
                  <li class="list-group-item"><a href="column.php?column=<?php echo 'PHP开发';?>">PHP开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=<?php echo 'JAVA开发';?>">JAVA开发</a></li>
                  <li class="list-group-item"><a href="column.php?column=<?php echo '网络营销';?>">网络营销</a></li>
                  <li class="list-group-item list-group-item-success"><a href="publish.php">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
            
            	<table class="table">
                    <tr>
                        <th>id</th>
                        <th>文章标题</th>
                        <th>发布日期</th>
                        <th>操作</th>
                    </tr>
                   <?php 
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
					?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo date('Y-m-d H:i:s',$row['add_date']);?></td>
                        <td>
                        <a href="delete.php?id=<?php echo $row['id'];?>">删除</a> 
                        <a href="change.php?id=<?php echo $row['id'];?>">修改</a></td>
					</tr>
               		<?php
						}
					}
					?>
                </table>

            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>