<?php
require_once('database.php');
if(empty($_POST['account'])||empty($_POST['password'])||empty($_POST['password2'])||empty($_POST['name'])||empty($_POST['school'])||empty($_POST['email'])||empty($_POST['phone'])){
	header("Location: ../error");
}
$sql = "SELECT count(*) FROM member WHERE account = '{$_POST['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[0]==1){
	echo "<script type=\"text/javascript\">";
	echo 'alert("this account is existed");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$sql = "INSERT INTO member (account, password, name, school, email, phone) VALUES ('{$_POST['account']}', '{$_POST['password']}', '{$_POST['name']}', '{$_POST['school']}', '{$_POST['email']}', '{$_POST['phone']}')";
$rs = $db->prepare($sql);
$rs->execute();
echo "<script type=\"text/javascript\">";
echo 'alert("success!");';
echo "history.go(-2);";
echo "</script>";
?>