<?php
require_once('database.php');
$sql = "SELECT * FROM member WHERE account = '{$_SESSION['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[password]===md5(md5(md5($_POST['oldpassword'])))){
	$sql = "UPDATE member SET password = '".md5(md5(md5($_POST['password'])))."' WHERE account = '{$_SESSION[account]}'";
	$rs = $db->prepare($sql);
	$rs->execute();
	header("Location: ../logout.php");
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("修改成功！");';
	echo "history.go(-1);";
	echo "</script>";
}
?>