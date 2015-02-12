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
$name=strip_tags(mysql_escape_string($_POST['name']));
$group=strip_tags(mysql_escape_string($_POST['group']));
$place=strip_tags(mysql_escape_string($place));
$week=strip_tags(mysql_escape_string($_POST['week']));
$content=strip_tags(mysql_escape_string($_POST['content']),'<br><p><a><ul><li><span><strong><div><h1><h2><h3><sup><sub><u><blockquote><ol><img>');
$teacher=strip_tags(mysql_escape_string($_POST['teacher']));
$leader=strip_tags(mysql_escape_string($_POST['leader']));
$phone=strip_tags(mysql_escape_string($_POST['phone']));
$leader2=strip_tags(mysql_escape_string($_POST['leader2']));
$phone2=strip_tags(mysql_escape_string($_POST['phone2']));
$sql = "INSERT INTO `event` (`name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `pass`) VALUES ('{$name}', '{$group}', '{$place}', $other, '{$week}', '{$content}', '{$teacher}', '{$leader}', '{$phone}', '{$leader2}', '{$phone2}', '{$_SESSION['account']}', 0)";
//echo $sql;
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../show.php");
exit;
?>