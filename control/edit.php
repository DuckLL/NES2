<?php
require_once('database.php');
if(!isset($_SESSION['account']))
	header("Location: ../error.php");
if(!isset($_POST['name'])||!isset($_POST['school'])||!isset($_POST['email'])||!isset($_POST['phone'])){
	header("Location: ../error.php");
	exit;
}
if(!preg_match("/^([\x7f-\xff]+)$/",$_POST['name'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("姓名只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^[0-9]{7}$/",$_POST['school'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("學號格式錯誤");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})*$/",$_POST['email'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("email格式錯誤");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^[0-9]{10}$/",$_POST['phone'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("電話格式錯誤");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$sql = "UPDATE member SET name = '{$_POST['name']}', school = '{$_POST['school']}', email='{$_POST['email']}', phone = '{$_POST['phone']}' WHERE account = '{$_SESSION['account']}'";
$rs = $db->prepare($sql);
$rs->execute();
echo "<script type=\"text/javascript\">";
echo 'alert("修改成功！");';
echo "history.go(-1);";
echo "</script>";
?>