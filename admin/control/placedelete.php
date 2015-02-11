<?php
require_once('../../control/define.php');
if($_SESSION['account']!=='admin'||!isset($_GET['id'])){
	header("Location: ../../error.php");
	exit;
}
$id=mysql_escape_string($_GET['id']);
$sql = "DELETE FROM place WHERE name='".$place[$id]."'";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../place.php");
?>