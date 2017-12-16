<?php
include 'head.php';
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
            <form method="post" action="dopublish.php" enctype="multipart/form-data">
            	<div class="form-group">
                    <label for="exampleInputEmail1">文章标题</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="文章标题">
                  </div>
                <div class="form-group">
                    <label for="column">栏目名称</label>
                    <select class="form-control" name="column">
                      <option>Web前端开发</option>
                      <option>UI设计</option>
                      <option>PHP开发</option>
                      <option>JAVA开发</option>
                      <option>网络营销</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">文章描述</label>
                    <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                  </div>
                <div class="form-group">
                    <label for="keywords">关键词</label>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="关键词">
                  </div>
                  <h5>文章内容</h5>
                 <!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:300px;">
                    <p>请添加文章内容……</p>
                </script>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">上传缩略图</label>
                    <input type="file" id="exampleInputFile" name="upfile">
                 </div>
                <input type="submit" class="btn btn-success" value="发布文章"> <input type="reset" class="btn btn-danger" value="重置内容">
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