<?php
    session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include ("dbconnect.php");
?>
<?php

$admin_hoten = "admin"; //tên đăng nhập
$admin_matkhau = "123456"; //mật khẩu đăng nhập
$hoten = $_POST["hoten"];
$matkhau = $_POST["matkhau"];
if($hoten == $admin_hoten AND $matkhau == $admin_matkhau){
	$_SESSION['login'] = $hoten;
   Setcookie("hoten","$hoten", time()+9000);
    header("location: admin.php");
}
else
{
    echo("<script>alert('Sai tên đăng nhập hoặc mật khẩu.');location='index.php';</script>");
}
?>
