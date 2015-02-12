<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_POST['newplace'])){
	header("Location: ../../error.php");
	exit;
}
$newplace=mysql_escape_string($_POST['newplace']);
//新增
$sql = "INSERT INTO `place` (`name`) VALUES ('{$newplace}');";
$rs = $db->prepare($sql);
$rs->execute();
//名字相同取消other
$sql = "UPDATE event SET other=0 WHERE place='{$newplace}'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../place_date.php");
?>