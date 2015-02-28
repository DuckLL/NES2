<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_GET['id'])||!isset($_POST['withdraw'])){
	header("Location: ../../error.php");
	exit;
}
$id=strip_tags(mysql_escape_string($_GET['id']));
$withdraw=strip_tags(mysql_escape_string($_POST['withdraw']),'<br><p><a><ul><li><span><strong><div><h1><h2><h3><sup><sub><u><blockquote><ol><img>');
$sql = "UPDATE event SET withdraw='{$withdraw}' , pass=-1 WHERE id='{$id}'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../event.php");
?>