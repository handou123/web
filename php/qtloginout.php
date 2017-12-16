<?php
session_start();
if( !empty($_SESSION['username']) )
{
	unset($_SESSION['username']);
}
else
{
	setcookie('username',1,time()-1,'/');
	
}

$msg="成功退出！";
$jumpUrl="../login.php";
include "../tips.php";
exit;
?>
