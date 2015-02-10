<?php
require_once('database.php');
if(!isset($_SESSION['account']))
	header("Location: ../error.php");
$sql = "SELECT * FROM member WHERE account = '{$_SESSION['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[password]===md5(sha1(md5($_POST['oldpassword'])))){
	$sql = "UPDATE member SET password = '".md5(sha1(md5($_POST['password'])))."' WHERE account = '{$_SESSION[account]}'";
	$rs = $db->prepare($sql);
	$rs->execute();
	header("Location: ../logout.php");
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("修改失敗！");';
	echo "history.go(-1);";
	echo "</script>";
}
?>