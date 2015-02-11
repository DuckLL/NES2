<?php
require_once('../../control/define.php');
if($_SESSION['account']!=='admin'||!isset($_GET['id'])){
	header("Location: ../../error.php");
	exit;
}
$id=mysql_escape_string($_GET['id']);
$sql = "DELETE FROM member WHERE id='{$id}'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../member.php");
?>