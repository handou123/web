<?php
include "header.php";


?>
  
	<!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">前端资讯</li>
        </ol>
    </div>
    <!--内容区-->
    <div class="container" id="content">
        <div class="row">
            <div class="list-group col-md-6">
               
                <a href="list.php?column=<?php echo 'Web前端开发';?>" class="list-group-item list-group-item-success">
                    <span class="glyphicon glyphicon-user">Web前端开发</span>
                </a>
                <?php
					$sql="SELECT * FROM u_article WHERE `column`='Web前端开发' ORDER BY `id` DESC LIMIT 4";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
				?>
                <a href="content.php?id=<?php echo $row['id'];?>&&title=<?php echo $row['title'];?>" class="list-group-item"><?php echo $row['title'];?></a>
                <?php
						}
					}
				?>
            </div>
            <div class="list-group col-md-6">
                <a href="list.php?column=<?php echo '网络营销';?>" class="list-group-item list-group-item-info">
                    <span class="glyphicon glyphicon-question-sign">网络营销</span>
                </a>
                <?php
					$sql="SELECT * FROM u_article WHERE `column`='网络营销' ORDER BY `id` DESC LIMIT 4";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
				?>
                <a href="content.php?id=<?php echo $row['id'];?>&&title=<?php echo $row['title'];?>" class="list-group-item"><?php echo $row['title'];?></a>
                <?php
						}
					}
				?>
            </div>
            <div class="list-group col-md-6">
                <a href="list.php?column=<?php echo 'JAVA开发';?>" class="list-group-item list-group-item-danger">
                    <span class="glyphicon glyphicon-th-large">JAVA开发</span>
                </a>
                <?php
					$sql="SELECT * FROM u_article WHERE `column`='JAVA开发' ORDER BY `id` DESC LIMIT 4";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
				?>
                <a href="content.php?id=<?php echo $row['id'];?>&&title=<?php echo $row['title'];?>" class="list-group-item"><?php echo $row['title'];?></a>
               <?php
						}
					}
				?>
            </div>
            <div class="list-group col-md-6">
                <a href="list.php?column=<?php echo 'UI设计';?>" class="list-group-item active">
                    <span class="glyphicon glyphicon-th-large">UI设计</span>
                </a>
                <?php
					$sql="SELECT * FROM u_article WHERE `column`='UI设计' ORDER BY `id` DESC LIMIT 4";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
				?>
                <a href="content.php?id=<?php echo $row['id'];?>&&title=<?php echo $row['title'];?>" class="list-group-item"><?php echo $row['title'];?></a>
               <?php
						}
					}
				?>
            </div>
           <div class="list-group col-md-6">
                <a href="list.php?column=<?php echo 'PHP开发';?>" class="list-group-item list-group-item-warning">
                    <span class="glyphicon glyphicon-th-large">PHP开发</span>
                </a>
                <?php
					$sql="SELECT * FROM u_article WHERE `column`='PHP开发' ORDER BY `id` DESC LIMIT 4";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
				?>
                <a href="content.php?id=<?php echo $row['id'];?>&&title=<?php echo $row['title'];?>" class="list-group-item"><?php echo $row['title'];?></a>
               <?php
						}
					}
				?>
            </div>
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