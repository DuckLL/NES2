<?php
require_once('database.php');
$type = ( isset($_POST['type']) ) ? $_POST['type'] : $_GET['type'];
$sql = "SELECT count(*) FROM member WHERE account = '" . str_replace("\'", "''", $_GET['user_name']) . "'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[0]===0)
{
	$ret = '<div class="label label-success">此帳號可以使用</div>';
}
else
{
	$ret = '<div class="label label-danger">此帳號已經有人使用</div>';
}
echo $ret;
?>