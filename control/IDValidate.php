<?php
require_once('database.php');
if(!preg_match("/^[a-zA-Z0-9]*$/",$_POST['account'])){
	$ret="您的ID格式不正確 只能使用英文與數字(標點符號空格也不行喔)";
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