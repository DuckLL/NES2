<?php
require_once('database.php');
if(empty($_POST['account'])||empty($_POST['password'])){
	header("Location: index.php");
	exit;
}
$paccount=$_POST['account'];
$sql="SELECT * FROM member WHERE account='$paccount'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($_POST['password']==$row[password]){
	$_SESSION['id']=$row[id];
	$_SESSION['account']=$row[account];
	$_SESSION['name']=$row[name];
	if($_POST['account']=='admin')
		header("Location: ../admin/index.php");
	else
		header("Location: ../index.php");
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("password error!");';
	echo "history.go(-1);";
	echo "</script>";
}
?>