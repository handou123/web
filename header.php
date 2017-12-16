<?php
include "config.php";
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
                <a class="navbar-brand" href="index.php" id="brand-txt" target="_blank">首页</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="webproblem.php" target="_blank">前端资讯</a></li>
                    <li><a href="choos.php" target="_blank">课程选择</a></li>
                    <li><a href="vote.php" target="_blank">投票</a></li>
                    <li><a href="search.php" target="_blank">搜索</a></li>
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