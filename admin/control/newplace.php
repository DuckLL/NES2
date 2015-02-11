<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_POST['newplace'])){
	header("Location: ../../error.php");
	exit;
}
$newplace=mysql_escape_string($_POST['newplace']);
$sql = "INSERT INTO `place` (`name`) VALUES ('{$newplace}');";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../place.php");
?>