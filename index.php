<?php
include "header.php";
$sql="SELECT * FROM u_article ORDER BY id DESC LIMIT 8";
$result=$conn->query($sql);
?>

    <!--内容区-->
    <div id="content" class="container">
        <div class="projects-header page-header">
            <h2>Web前端课程推荐</h2>
            <span class="small">这些项目或者是对Boostrap进行了有益的补充，或者是基于Boostrap开发的</span>
            <hr>
         </div>
            <div class="row">
               <?php
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
						{			
				?>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="thumbnail">
                        <a href="content.php?id=<?php echo $row['id']?>" target="_blank" title="<?php echo $row['title']; ?>">
                        <img class="lazy" src="<?php echo $row['thumb']; ?>" width="300" alt="<?php echo $row['title']; ?>">
                        </a>
                        <div class="caption">
                            <h3>
                            <a href="content.php?id=<?php echo $row['id']?>" title="<?php echo $row['title']; ?>" target="_blank">
                            <?php echo mb_substr($row['title'],0,9,'utf8'); ?>
                            </a><br>
                            <small><a href="list.php?column=<?php echo $row['column']; ?>" target="_blank">
                            <?php echo $row['column']; ?></a>
                            </small>
                            </h3>
                            <p>
                             <?php echo mb_substr($row['description'],0,40,'utf8')."..."; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
					};
				}
				else
				{
					echo '没有查询到数据';
				};
				?>
            </div>
<!--        </div>-->
        <div class="projects-header page-header">
            <h2>Web前端课程选择</h2>
            <span class="small">这些项目或者是对Boostrap进行了有益的补充，或者是基于Boostrap开发的</span>
            <hr>
        </div>
<!--            <div class="container">-->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>班级名称</th>
                            <th>课时</th>
                            <th>价格</th>
                            <th>免费试听</th>
                            <th>购买课程</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>就业精品班（面授/封闭班/包食宿）</td>
                            <td>4个月</td>
                            <td>优惠价17800.00 <del>原价17800.00</del></td>
                            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
                            <td><button class="btn btn-danger" type="button">立即报名</button></td>
                        </tr>
                        <tr>
                            <td>就业精品班（面授/封闭班/包食宿）</td>
                            <td>4个月</td>
                            <td>优惠价17800.00 <del>原价17800.00</del></td>
                            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
                            <td><button class="btn btn-danger" type="button">立即报名</button></td>
                        </tr>
                        <tr>
                            <td>就业精品班（面授/封闭班/包食宿）</td>
                            <td>4个月</td>
                            <td>优惠价17800.00 <del>原价17800.00</del></td>
                            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
                            <td><button class="btn btn-danger" type="button">立即报名</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
<!--        </div>-->
    <!--底部-->
    <footer class="container">
        Copyright1999-2016北京中公教育科技股纷有限公司 .All Rights Reserved 京ICP证161188号
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>