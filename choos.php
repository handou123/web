<?php
include "header.php";
/*if(empty($_GET['page'])){
	$page=1;
}else{
	$page=$_GET['page'];
};*/
?>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">前端资讯</li>
        </ol>
    </div>
    <!--内容区-->
    <div class="container">
        <div id="choose">
				<select class="form-control" name="column" onchange="change(this.value)">
					  <option>请选择您要查询的课程</option>
					  <option>Web前端开发</option>
					  <option>UI设计</option>
					  <option>PHP开发</option>
					  <option>JAVA开发</option>
					  <option>网络营销</option>
				</select>
          
        </div>
        <hr>
    </div>
    <div id="content" class="container">
        <div class="row" id="box">
           
		</div>
   		<nav>
            <ul class="pager">
                <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
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
<script>
	var oDiv=document.getElementById("box");
//	var oPage=document.getElementById("page");
	/*var oS=document.getElementsByTagName('select')[0];*/
//	console.log(oS.value);
	change("全部内容");
	function change(txt){
		if(window.XMLHttpRequest)
		{
			var oAjax=new XMLHttpRequest();
		}
		else
		{
			var oAjax=new ActiveXObject("Microsoft.XMLHTTP");
		}
		oAjax.open("get","php/dochoose.php?txt="+txt+"&t="+Math.random(),true);
		oAjax.send();
		//请求数据
		oAjax.onreadystatechange=function(){
			if(oAjax.readyState==4&&oAjax.status==200)
			{
				oDiv.innerHTML=oAjax.responseText;
			}
		}
	}
</script>