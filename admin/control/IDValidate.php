<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
if(!preg_match("/^[a-zA-Z]\w*$/",$_POST['account'])){
	$ret="您的ID格式不正確 第一個字不為數字，只接受大小寫字母、數字及底線";
}
elseif(strlen($_POST['account'])>30){
	$ret="您的ID長度超出合法範圍";
}
else{
	$sql = "SELECT count(*) FROM member WHERE account = '{$_POST['account']}'";
	$rs = $db->query($sql);
	$row = $rs->fetch();
	if($row[0]==0)
	{
		$ret = '<div class="label label-success">此帳號可以使用</div>';
	}
	else
	{
		$ret = '<div class="label label-danger">此帳號已經有人使用</div>';
	}
}
echo $ret;
?>