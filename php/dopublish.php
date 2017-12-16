<?php
include "config.php";
$jumpUrl="publish.php";
if( $_SERVER['REQUEST_METHOD']=='POST' )
{
	$title=$_POST["title"];
	$column=$_POST["column"];
	$description=$_POST["description"];
	$keywords=$_POST["keywords"];
	$contents=$_POST["editorValue"];
	$author=$_SESSION['admin_username'];
	//文件上传
	$dir="../upload";
	$typeArr=[
		"image/jpeg",
		"image/jpg",
		"image/png",
		"image/gif"
	];
	//判断错误码
	if( $_FILES['upfile']['error']==0 )
	{
		//自定义大小
		$fileSize=1*1024*1024;//1M
		if( $_FILES['upfile']['size']>$fileSize)
		{
			$msg="文件太大！";
			include "../tips.php";
			exit;
		}
		//文件类型
		$fileType=$_FILES['upfile']['type'];
		if( !in_array($fileType,$typeArr) )
		{
			$msg="文件类型错误！";
			include "../tips.php";
			exit;
		}
		//重命名 路径
		$fileName=$_FILES['upfile']['name'];
		$nameArr=explode('.',$fileName);
		$fileSuffix=array_pop($nameArr);//后缀名
		$newName=date("YmdHis").rand(1000,9999).".".$fileSuffix;
		move_uploaded_file($_FILES['upfile']['tmp_name'],$dir."/".$newName);//路径
		
		$thumb="upload/".$newName;
		$time=time();
		
		$sql="INSERT INTO u_article(`title`,`column`,`description`,`keywords`,`contents`,`thumb`,`add_date`,`author`) VALUES('$title','$column','$description','$keywords','$contents','$thumb','$time','$author')";
		
		if( $conn->query($sql) )
		{
			$msg = '发布成功';
			$jumpUrl = 'column.php';
			include '../tips.php';
			exit;
		}
		else
		{
			echo $conn->error;
		}
	}
	else
	{
		$msg = '上传文件失败';
		include '../tips.php';
		exit;
	}
}
else
{
	$msg="非法提交";
	include "../tips.php";
	exit;
}




?>