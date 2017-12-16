<?php
include "config.php";
if( empty($_SESSION['admin_username']) )
{
	$msg = '请登录';
	$jumpUrl = 'adminlogin.php';
	include '../tips.php';
	exit;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/site.css">
    <link href="../umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="../umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../umeditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：<?php echo $_SESSION['admin_username']; ?>
        	<a href="loginout.php">注销</a></small></h2>
   		</div>