<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_GET['id'])||!isset($_GET['pass'])){
	header("Location: ../../error.php");
	exit;
}
$id=strip_tags(mysql_escape_string($_GET['id']));
$pass=strip_tags(mysql_escape_string($_GET['pass']));
$sql = "UPDATE event SET pass='{$pass}' WHERE id='{$id}'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../event.php");
?>