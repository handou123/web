<?php
include "header.php";

$id=$_GET['id'];
$sql="SELECT * FROM u_article WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
    
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="index.php">首页</a></li>
            <li><a href="#"><?php echo $row['column']; ?></a></li>
            <li class="active"><?php echo $row['title'];?></li>
        </ol>
    </div>
    <!--内容区-->
    <div class="container" id="content">
        <h2 id="txt"><?php echo $row['title']; ?></h2>
        <p class="small">作者：<mark><?php echo $row['author']?></mark> 发布日期：<mark>
        <?php echo date('Y-m-d H:i:s',$row['add_date']) ;?></mark></p>
        <hr>
        <?php echo $row['contents'];?>
        
        <div class="list-group">
            <a class="list-group-item" id="list-f">
                相关文章
            </a>
            <a href="#" class="list-group-item">
                <span class="glyphicon glyphicon-star-empty">2016年1月28日荣获：大众点评2015“十佳职业技术培训品牌奖”</span>
            </a>
            <a href="#" class="list-group-item">
                <span class="glyphicon glyphicon-star-empty">2016年1月28日荣获：大众点评2015“十佳职业技术培训品牌奖”</span>
            </a>
            <a href="#" class="list-group-item">
                <span class="glyphicon glyphicon-star-empty">2016年1月28日荣获：大众点评2015“十佳职业技术培训品牌奖”</span>
            </a>
            <a href="#" class="list-group-item">
                <span class="glyphicon glyphicon-star-empty">2016年1月28日荣获：大众点评2015“十佳职业技术培训品牌奖”</span>
            </a>
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