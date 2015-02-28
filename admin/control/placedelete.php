<?php
require_once('../../control/define.php');
if($_SESSION['account']!=='admin'||!isset($_GET['id'])){
	header("Location: ../../error.php");
	exit;
}
$id=strip_tags(mysql_escape_string($_GET['id']));
//更改原位置變成其他
$sql = "UPDATE event SET other=1 WHERE place='{$place[$id]}'";
$rs = $db->prepare($sql);
$rs->execute();
//刪除
$sql = "DELETE FROM place WHERE name='{$place[$id]}'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../place_date.php");
?>