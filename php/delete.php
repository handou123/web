<?php 
include "config.php";
$jumpUrl='column.php';
$id=$_GET['id'];
$sql="DELETE FROM u_article WHERE id=$id";
if($conn->query($sql))
{
	$msg='删除成功！';
	include '../tips.php';
	exit;
}
$conn->close();//关闭数据库
?>