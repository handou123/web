<?php
include "config.php";

$userName=$pass=$agpass=$email=$tel=$area=$sex=$hobby=$hobbystr=$read="";
$jumpUrl="../singup.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["username"]))
	{
		$msg= "用户名不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$reg= "/^[a-zA-Z]+$/";
		if( !(preg_match($reg,value($_POST["username"]))) )
		{
			$msg = "用户名格式不正确！";
			include "../tips.php";
			exit;
		}
		else
		{
			$userName=value($_POST["username"]);
		}
	}
	if(empty($_POST["pass"]))
	{
		$msg= "密码不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$pass=value($_POST["pass"]);
		$reg= "/^[a-zA-Z1-9]+$/";
		if( !(preg_match($reg,value($_POST["pass"]))) )
		{
			$msg = "密码格式不正确！";
			include "../tips.php";
			exit;
		}
		else
		{
			$pass=value($_POST["pass"]);
		}
	}
	if(empty($_POST["agpass"]))
	{
		$msg= "确认密码不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		if( $_POST["agpass"]!=$pass) 
		{
			$msg = "确认密码不正确！";
			include "../tips.php";
			exit;
		}
		else
		{
			$agpass=$pass;
		}
	}
	if(empty($_POST["email"]))
	{
		$msg= "邮箱不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$reg= "/^\w+@\w+\.\w+$/";
		if( !(preg_match($reg,value($_POST["email"]))) )
		{
			$msg = "邮箱格式不正确！";
			include "../tips.php";
			exit;
		}
		else
		{
			$email=value($_POST["email"]);
		}
	}
	if(empty($_POST["tel"]))
	{
		$msg= "电话不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$reg= "/^1[3578]\d{9}$/";
		if( !(preg_match($reg,value($_POST["tel"]))) )
		{
			$msg = "电话格式不正确！";
			include "../tips.php";
			exit;
		}
		else
		{
			$tel=value($_POST["tel"]);
		}
	}
	if($_POST["area"]=="请选择省份")
	{
		$msg= "省份不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$area = $_POST["area"];
	}
	if( empty($_POST["sex"]) )
	{
		$msg = "性别不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$sex =$_POST["sex"];
	}
	if( empty($_POST["hobby"]) )
	{
		$msg = "爱好不能为空！";
		include "../tips.php";
		exit;
	}
	else
	{
		$hobby = $_POST["hobby"];
		for($i=0;$i<count($hobby);$i++)
		{
			if($i==0)
			{
				$hobbystr.=$hobby[$i];
			}
			else
			{
				$hobbystr.="、".$hobby[$i];
			}
		}
	}
	if( empty($_POST["read"]) )
	{
		$msg = "请认真阅读！";
		include "../tips.php";
		exit;
	}
	else
	{
		$read = $_POST["read"];
	}
	
	$sqlSelect="SELECT username FROM u_user WHERE username='$userName'";
	
	$result=$conn->query($sqlSelect);
	if($result->num_rows>0)
	{
		$msg="用户已注册！";
		include "../tips.php";
		exit;
	}
	$sql="INSERT INTO u_user(username,password,email,tel,area,sex,hobby)
	VALUES('$userName','$pass','$email','$tel','$area','$sex','$hobbystr')";
	if($conn->query($sql))
	{
		$msg="注册成功！";
		$jumpUrl="../login.php";
		include "../tips.php";
		exit;
	}
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





























