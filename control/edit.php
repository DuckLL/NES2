<?php
require_once('database.php');
if(!isset($_POST['name'])||!isset($_POST['school'])||!isset($_POST['email'])||!isset($_POST['phone'])){
	header("Location: ../error.php");
	exit;
}
if(!ereg("^[0-9]+$",$_POST['school'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("學號只能使用數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!ereg("^[0-9]+$",$_POST['phone'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("電話只能使用數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$name=mysql_escape_string($_POST['name']);
$email=mysql_escape_string($_POST['email']);
$sql = "UPDATE member SET name = '{$name}', school = '{$_POST['school']}', email='{$email}', phone = '{$_POST['phone']}' WHERE account = '{$_SESSION['account']}'";
$rs = $db->prepare($sql);
$rs->execute();
echo "<script type=\"text/javascript\">";
echo 'alert("修改成功！");';
echo "history.go(-1);";
echo "</script>";
?>