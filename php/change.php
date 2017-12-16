<?php
include 'head.php';
$id=$_GET['id'];
$sql="SELECT * FROM u_article WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="#">Web前端开发</a></li>
                  <li class="list-group-item"><a href="#">UI设计</a></li>
                  <li class="list-group-item"><a href="#">PHP开发</a></li>
                  <li class="list-group-item"><a href="#">JAVA开发</a></li>
                  <li class="list-group-item"><a href="#">网络营销</a></li>
                  <li class="list-group-item list-group-item-success"><a href="#">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
            <form method="post" action="dochange.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            	<div class="form-group">
                    <label for="exampleInputEmail1">文章标题</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="文章标题" value="<?php echo $row['title'];?>">
                  </div>
                <div class="form-group">
                    <label for="column">栏目名称</label>
                    <select class="form-control" name="column">
                      <option <?php if($row['column']=='Web前端开发'){echo 'selected';};?>
                      value="Web前端开发">Web前端开发</option>
                      <option <?php if($row['column']=='UI设计'){echo 'selected';};?>
                      value="UI设计">UI设计</option>
                      <option <?php if($row['column']=='PHP开发'){echo 'selected';};?>
                      value="PHP开发">PHP开发</option>
                      <option <?php if($row['column']=='JAVA开发'){echo 'selected';};?>
                      value="JAVA开发">JAVA开发</option>
                      <option <?php if($row['column']=='网络营销'){echo 'selected';};?>
                      value="网络营销">网络营销</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">文章描述</label>
                    <textarea class="form-control" rows="3" id="description" name="description">
                    	<?php echo $row['description'];?>
                    </textarea>
                  </div>
                <div class="form-group">
                    <label for="keywords">关键词</label>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="关键词" value="<?php echo $row['keywords'];?>">
                  </div>
                  <h5>文章内容</h5>
                 <!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:300px;">
                    <?php echo $row['contents'];?>
                </script>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">上传缩略图</label>
                    <input type="file" id="exampleInputFile" name="upfile">
                 </div>
                <input type="submit" class="btn btn-success" value="修改文章"> <input type="reset" class="btn btn-danger" value="重置内容">
                </form>
                <script type="text/javascript">
                    //实例化编辑器
                    var um = UM.getEditor('myEditor');
                   
                    
                </script>
            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>
