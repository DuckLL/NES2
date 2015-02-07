<?php
require_once('database.php');
if(!isset($_POST['account'])||!isset($_POST['school'])||!isset($_POST['email'])||!isset($_POST['phone'])){
	$ans="資料不完整";
}
elseif(!ereg("^[a-zA-Z0-9]+$",$_POST['account'])){
	$ans="資料錯誤";
}
else{
	$sql = "SELECT * FROM member WHERE account = '{$_POST['account']}'";
	$rs = $db->query($sql);
	$row = $rs->fetch();
	if($row[account]===$_POST['account'] && $row[school]===$_POST['school'] && $row[email]===$_POST['email'] && $row[phone]===$_POST['phone']){
		$newpassword=substr(md5(rand()),0,6);
		$sql = "UPDATE member SET password = '".md5(sha1(md5($newpassword)))."' WHERE account = '{$row[account]}'";
		$rs = $db->prepare($sql);
		$rs->execute();
		$ans="新密碼：".$newpassword."<br>請登入後 進入資料維護 修改密碼";
	}
	else{
		$ans="資料錯誤";
	}
}

echo $ans;
?>