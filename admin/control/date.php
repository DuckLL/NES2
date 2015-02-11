<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_POST['firstday'])){
	header("Location: ../../error.php");
	exit;
}
$firstday=mysql_escape_string($_POST['firstday']);
$sql = "UPDATE config SET firstday='{$firstday}' WHERE id=1";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../date.php");
?>