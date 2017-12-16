<?php
include "header.php";


?>   
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">搜索</li>
        </ol>
    </div>
    <!--内容区-->
   <form class="form-inline form-search text-center" action="searchlist.php" method="get">
		<div class="form-group">
			<label class="sr-only" for="exampleInputEmail3">Email address</label>
			<input type="text" class="form-control" name="txt" placeholder="请输入要搜索的内容">
		</div>
		<button type="submit" class="btn btn-default">搜索</button>
   </form>
    <!--底部-->
    <footer class="container">
        Copyright1999-2016北京中公教育科技股纷有限公司 .All Rights Reserved 京ICP证161188号
    </footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>