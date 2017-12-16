<?php
include "config.php";
$userName=$pass="";
$jumpUrl="adminlogin.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST["username"]))
	{
		$msg="用户名不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$userName=$_POST["username"];
	}
	if(empty($_POST["password"]))
	{
		$msg="密码不能为空！";
		include "../tips.php";
		exit;
	}
	else{
		$pass=$_POST["password"];
	}
	
	$sqlSelect="SELECT user,pass FROM s_user WHERE user='$userName'";
	$result=$conn->query($sqlSelect);
	
	if($result->num_rows>0)
	{
		$rows=$result->fetch_assoc();
		if($rows['pass']==$pass)
		{
			
			$_SESSION["admin_username"]=$userName;
			$msg="登录成功！";
			$jumpUrl="column.php";
			include "../tips.php";
			exit;
		}
		else
		{
			$msg="密码输入错误！";
			include "../tips.php";
			exit;
		}
	}
	$msg="用户不存在！";
	include "../tips.php";
	exit;
}
?>