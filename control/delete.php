<?php
require_once('database.php');
if(!isset($_SESSION['account'])||!isset($_GET['id']))
	header("Location: ../error.php");
$id=strip_tags(mysql_escape_string($_GET['id']));
$sql="SELECT * FROM event WHERE id='{$id}'";
$rs = $db->query($sql);
if($row = $rs->fetch()){
	if($row[applicant]==$_SESSION['account']){
		$sql = "DELETE FROM event WHERE id='{$id}'";
		$rs = $db->exec($sql);
		header("Location: ../show.php");
	}
	else{
		header("Location: ../error.php");
	}
}
else
	header("Location: ../error.php");
?>