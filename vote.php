<?php
include 'config.php';
if( empty($_SESSION['username']) && empty($_COOKIE['username']) )
{
	$msg="请登录进行投票！";
	$jumpUrl='login.php';
	include "tips.php";
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/choose.css">
    <link rel="stylesheet" href="css/vote.css">
    <link rel="stylesheet" href="css/webproblem.css">
</head>
<body>
<div id="wrap">
    <!--导航条-->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" id="brand-txt">首页</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="webproblem.php">前端资讯</a></li>
                    <li><a href="choos.php">课程选择</a></li>
                    <li><a href="vote.php">投票</a></li>
                    <li><a href="search.php">搜索</a></li>
                   <?php
						if(!empty($_SESSION['username']))
						{
							
					?>
                    <li><a href="#">欢迎用户：<?php echo $_SESSION['username'];?></a></li>
                    <li><a href="php/qtloginout.php">注销</a></li>
                    <?php
						}
						else if( !empty($_COOKIE['username']) )
						{
							
					?> 
                   	<li><a href="#">欢迎用户：<?php echo $_COOKIE['username'];?></a></li>
                    <li><a href="php/qtloginout.php">注销</a></li>
                    <?php
						}
						else
						{
					?>
                  	<li><a href="singup.html">注册</a></li>
                    <li><a href="login.html">登录</a></li>
                   <?php	
						}
					?>        
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">关于我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--切换图片-->
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox" id="changeImg">
                <div class="item active" >
                    <img src="img/hdp_01.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/hdp_02.jpg" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--路径导航-->
    <div class="container" id="placeNav">
        <ol class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li class="active">投票</li>
        </ol>
    </div>
    <!--内容区-->
    <div class="container" id="content">
        <h2>请选择你喜欢的课程</h2>
        <h5>你觉得你比较喜欢下列哪个课程，请选择</h5>
        <hr>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="0">
                PC端网站重构
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="1">
                移动端端网站重构
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="2">
                JavaScript
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="3">
                JQuery
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios"  value="4">
                Bootstrap
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="5">
                Angular
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" value="6">
                H5高级课程
            </label>
        </div>
        <button type="button" class="btn btn-success" id="btnVote">投票</button>
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
	var oBtn=document.getElementById("btnVote");
	var oRadio=document.getElementsByName("optionsRadios");
	var oDiv=document.getElementById("content");
	oBtn.onclick=function(){
		var num="";
		for(var i=0;i<oRadio.length;i++)
		{
			if(oRadio[i].checked)
			{
				num=oRadio[i].value;
			}
		}
		if(window.XMLHttpRequest)
		{
			var oAjax=new XMLHttpRequest();
		}
		else
		{
			var oAjax=new ActiveXObject('Microsoft.XMLHTTP');
		}
		oAjax.open('get','php/dovote.php?vote='+num+'&a='+Math.random(),true);
		oAjax.send();
		oAjax.onreadystatechange=function(){
			if( oAjax.readyState==4 && oAjax.status==200 )
			{
				oDiv.innerHTML=oAjax.responseText;
			}
		}
	}
</script>


















