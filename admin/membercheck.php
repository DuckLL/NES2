<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
$id=mysql_escape_string($_GET['id']);
$sql="SELECT * FROM member WHERE id='{$id}'";
$rs = $db->query($sql);
if($row = $rs->fetch()){
	echo '
	<a class="btn btn-danger btn-lg" id="delete" href="control/memberdelete.php?id='.$row[id].'">確定刪除</a>
	<a class="btn btn-primary btn-lg" onclick="history.back()" role="button">返回</a>';
}
tail();
?>