<?php

include "config.php";
header("Content-type:text/html;charset=utf8");
$userName=$pass="";
$jumpUrl="../login.php";
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
		$userName=value($_POST["username"]);
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
	
	$sqlSelect="SELECT username,password FROM u_user WHERE username='$userName'";
	$result=$conn->query($sqlSelect);
	
	if($result->num_rows>0)
	{
		$rows=$result->fetch_assoc();
		if($rows['password']==$pass)
		{
			if( empty($_POST["check"]) )
				{
					$_SESSION["username"]=$userName;
					$msg="登录成功！";
					$jumpUrl="../index.php";
					include "../tips.php";
					exit;
				}
				else
				{
					setcookie('username',$userName,time()+5*24*60*60,'/');
					$msg="登录成功！";
					$jumpUrl="../index.php";
					include "../tips.php";
					exit;
				}
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
else
{
	$msg="非法提交！";
	include "../tips.php";
	exit;
}
function value($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
?>

