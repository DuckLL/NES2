<?php
require_once('database.php');
if(empty($_POST['account'])||empty($_POST['school'])||empty($_POST['email'])||empty($_POST['phone'])){
	$ans="資料不完整";
}
else{
	$sql = "SELECT * FROM member WHERE account = '" . str_replace("\'", "''", $_POST['account']) . "'";
	$rs = $db->query($sql);
	$row = $rs->fetch();
	if($row[account]===$_POST['account'] && $row[school]===$_POST['school'] && $row[email]===$_POST['email'] && $row[phone]===$_POST['phone']){
		$newpassword=substr(md5(rand()),0,6);
		$sql = "UPDATE member SET password = '".md5(md5(md5($newpassword)))."' WHERE account = '{$row[account]}'";
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