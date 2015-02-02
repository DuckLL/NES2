<?php
require_once('database.php');
if(empty($_POST['account'])||empty($_POST['password'])){
	header("Location: ../error");
	exit;
}
$sql="SELECT * FROM member WHERE account='{$_POST[account]}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if(md5(md5(md5($_POST['password'])))==$row[password]){
	$_SESSION['id']=$row[id];
	$_SESSION['account']=$row[account];
	$_SESSION['name']=$row[name];
	if($_POST['account']=='admin')
		header("Location: ../admin/");
	else
		header("Location: ../");
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("account or password error!");';
	echo "history.go(-1);";
	echo "</script>";
}
?>