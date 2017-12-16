<?php
session_start();
header("Content-type:text/html;charset=utf8");
$msg="";
$host='localhost';
$hostname='root';
$hostpass='root';
$hostbase='myitem';
$conn=new MySQLi($host,$hostname,$hostpass,$hostbase);
if($conn->connect_error)
{
	die('连接数据库失败');
}

?>