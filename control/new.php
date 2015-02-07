<?php
require_once('database.php');
if(!isset($_POST['name'])||!isset($_POST['group'])||!isset($_POST['place'])||!isset($_POST['week'])||!isset($_POST['content'])||!isset($_POST['teacher'])||!isset($_POST['leader'])||!isset($_POST['phone'])||!isset($_POST['leader2'])||!isset($_POST['phone2'])){
	header("Location: ../error.php");
	exit;
}
$place=$_POST['place']=='other'?$_POST['other']:$_POST['place'];
$other=$_POST['place']=='other'?1:0;
$sql = "INSERT INTO `event` (`name`, `group`, `place`, `other`, `week`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `pass`) VALUES ('{$_POST['name']}', '{$_POST['group']}', '{$place}', $other, '{$_POST['week']}', '{$_POST['content']}', '{$_POST['teacher']}', '{$_POST['leader']}', '{$_POST['phone']}', '{$_POST['leader2']}', '{$_POST['phone2']}', '{$_SESSION['account']}', 0)";
//echo $sql;
$rs = $db->prepare($sql);
$rs->execute();
$sql="SELECT * FROM event WHERE name='{$_POST['name']}' and applicant='{$_SESSION['account']}' ORDER BY `id` DESC";
$rs = $db->query($sql);
$row = $rs->fetch();
header("Location: ../event.php?id=".$row[id]);
exit;
?>