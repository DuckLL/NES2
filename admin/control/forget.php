<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_GET['account'])){
	header("Location: ../../error.php");
	exit;
}
if(!preg_match("/^[a-zA-Z]\w*$/",$_GET['account'])){
	$ans="資料錯誤";
}
else{
	$sql = "SELECT * FROM member WHERE account = '{$_GET['account']}'";
	$rs = $db->query($sql);
	if($row = $rs->fetch()){
		$newpassword=substr(md5(rand()),0,6);
		$sql = "UPDATE member SET password = '".md5(sha1(md5($newpassword)))."' WHERE account = '{$row[account]}'";
		$rs = $db->prepare($sql);
		$rs->execute();
		$ans="新密碼：".$newpassword;
	}
	else{
		$ans="資料錯誤";
	}
}
echo "<script type=\"text/javascript\">";
echo 'alert("'.$ans.'");';
echo "history.go(-1);";
echo "</script>";
?>