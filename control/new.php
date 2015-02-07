<?php
require_once('database.php');
if(empty($_POST['name'])||empty($_POST['group'])||empty($_POST['place'])||empty($_POST['week'])||empty($_POST['content'])||empty($_POST['teacher'])||empty($_POST['leader'])||empty($_POST['phone'])||empty($_POST['leader2'])||empty($_POST['phone2'])){
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