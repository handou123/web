<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>跳转页面</title>
<style>
*{margin:0; padding:0;}
.box{width:400px; height:200px; border:1px solid #ccc; position:absolute; left:50%; top:50%; margin:-100px 0 0 -200px;}
.box h2{line-height:40px; color:#fff; background:#333; text-align:center; font-size:22px;}
.box p{text-align:center; padding:40px 0 20px; font-weight:bold; font-size:18px; color:#f00;}
.box h4{padding:10px 50px; font-size:14px; font-weight:normal; text-align:center;}
</style>
</head>

<body>
<div class="box">
	<h2>提示内容</h2>
    <p><?php echo $msg; ?></p>
    <h4>页面自动 <a id="oA" href="javascript:void(0);" sHref="<?php echo $jumpUrl; ?>">跳转</a> 等待时间： <b id="times">3</b></h4>
</div>
</body>
</html>
<script>

var oTime = document.getElementById('times');
var oA = document.getElementById('oA');
	
var sHref = oA.getAttribute('sHref');//获取属性
	

var timer = null;
timer = setInterval(function(){
	
	oTime.innerHTML--;
	if(oTime.innerHTML<=1)
	{
		window.location = oA.href;
		clearInterval(timer);
	};
	
},1000);
	
oA.onclick = function(){
	clearInterval(timer);
	window.location = sHref;
}

</script>