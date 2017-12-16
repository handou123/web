<?php
session_start();

unset($_SESSION['admin_username']);
$msg="成功退出！";
$jumpUrl="adminlogin.php";
include "../tips.php";
exit;
?>
