<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
if(!isset($_POST['account'])||!isset($_POST['password'])||!isset($_POST['password2'])||!isset($_POST['groups'])||!isset($_POST['name'])||!isset($_POST['school'])||!isset($_POST['email'])||!isset($_POST['phone'])){
	header("Location: ../error.php");
	exit;
}
if(!preg_match("/^[a-zA-Z]\w*$/",$_POST['account'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("帳號只能使用英文或數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(strlen($_POST['account'])>30){
	echo "<script type=\"text/javascript\">";
	echo 'alert("您的ID長度超出合法範圍");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^([\x7f-\xff]+)$/",$_POST['groups'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("社團名稱只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
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
$sql = "SELECT count(*) FROM member WHERE account = '{$_POST['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[0]==1){
	echo "<script type=\"text/javascript\">";
	echo 'alert("這個帳號有人用過囉");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
else{
	$hashpassword=md5(sha1(md5($_POST['password'])));
	$sql = "INSERT INTO member (account, password, groups, name, school, email, phone) VALUES ('{$_POST['account']}', '{$hashpassword}', '{$_POST['groups']}', '{$_POST['name']}', '{$_POST['school']}', '{$_POST['email']}', '{$_POST['phone']}')";
	$rs = $db->prepare($sql);
	$rs->execute();
	echo "<script type=\"text/javascript\">";
	echo 'alert("註冊成功!");';
	echo "history.go(-2);";
	echo "</script>";
	exit;
}
?>