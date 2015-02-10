<?php
require_once('database.php');
if(!isset($_SESSION['account']))
	header("Location: ../error.php");
if(!isset($_POST['name'])||!isset($_POST['group'])||!isset($_POST['place'])||!isset($_POST['week'])||!isset($_POST['content'])||!isset($_POST['teacher'])||!isset($_POST['leader'])||!isset($_POST['phone'])||!isset($_POST['leader2'])||!isset($_POST['phone2'])){
	header("Location: ../error.php");
	exit;
}
$place=$_POST['place']=='other'?$_POST['other']:$_POST['place'];
$other=$_POST['place']=='other'?1:0;
$name=mysql_escape_string($_POST['name']);
$group=mysql_escape_string($_POST['group']);
$place=mysql_escape_string($place);
$week=mysql_escape_string($_POST['week']);
$content=mysql_escape_string($_POST['content']);
$teacher=mysql_escape_string($_POST['teacher']);
$leader=mysql_escape_string($_POST['leader']);
$phone=mysql_escape_string($_POST['phone']);
$leader2=mysql_escape_string($_POST['leader2']);
$phone2=mysql_escape_string($_POST['phone2']);
$sql = "INSERT INTO `event` (`name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `pass`) VALUES ('{$name}', '{$group}', '{$place}', $other, '{$week}', '{$content}', '{$teacher}', '{$leader}', '{$phone}', '{$leader2}', '{$phone2}', '{$_SESSION['account']}', 0)";
//echo $sql;
$rs = $db->prepare($sql);
$rs->execute();
$sql="SELECT * FROM event WHERE name='{$name}' and applicant='{$_SESSION['account']}' ORDER BY `id` DESC";
$rs = $db->query($sql);
$row = $rs->fetch();
header("Location: ../event.php?id=".$row[id]);
exit;
?>