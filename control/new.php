<?php
require_once('define.php');
if(!isset($_SESSION['account']))
	header("Location: ../error.php");
if(!isset($_POST['name'])||!isset($_POST['group'])||!isset($_POST['place'])||!isset($_POST['startdate'])||!isset($_POST['finishdate'])||!isset($_POST['content'])||!isset($_POST['teacher'])||!isset($_POST['leader'])||!isset($_POST['phone'])||!isset($_POST['leader2'])||!isset($_POST['phone2'])){
	header("Location: ../error.php");
	exit;
}
$place=$_POST['place']=='other'?$_POST['other']:$_POST['place'];
$other=$_POST['place']=='other'?1:0;
$name=strip_tags(mysql_escape_string($_POST['name']));
$group=strip_tags(mysql_escape_string($_POST['group']));
$place=strip_tags(mysql_escape_string($place));

$startdate=strip_tags(mysql_escape_string($_POST['startdate']));
$finishdate=strip_tags(mysql_escape_string($_POST['finishdate']));

if(!preg_match("#^((19|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#",$startdate)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("日期格式錯誤 (yyyy-mm-dd)");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("#^((19|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#",$finishdate)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("日期格式錯誤 (yyyy-mm-dd)");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}

$start=explode('-', $startdate);
$starttimestamp=mktime(0,0,0,$start[1],$start[2],$start[0]);
$finish=explode('-', $finishdate);
$finishtimestamp=mktime(0,0,0,$finish[1],$finish[2],$finish[0]);

$week=floor(($starttimestamp-$firstdaytimestamp)/(7*24*60*60));
$week2=floor(($finishtimestamp-$firstdaytimestamp)/(7*24*60*60));

if($week<0||$week2<0||$week>20||$week2>20||$week>$week2){
	echo "<script type=\"text/javascript\">";
	echo 'alert("輸入時間錯誤 不在合法範圍 第一週：'.($week+1).' 第二週：'.($week2+1).'");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if($week2-$week>1){
	echo "<script type=\"text/javascript\">";
	echo 'alert("活動最多跨兩週 如須延長請另外申請");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if($week2>$nowweek+12){
	echo "<script type=\"text/javascript\">";
	echo 'alert("活動最早前12週申請");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$content=strip_tags(mysql_escape_string($_POST['content']),'<br><p><a><ul><li><span><strong><div><h1><h2><h3><sup><sub><u><blockquote><ol><img>');
$teacher=strip_tags(mysql_escape_string($_POST['teacher']));
$leader=strip_tags(mysql_escape_string($_POST['leader']));
$phone=strip_tags(mysql_escape_string($_POST['phone']));
$leader2=strip_tags(mysql_escape_string($_POST['leader2']));
$phone2=strip_tags(mysql_escape_string($_POST['phone2']));

if(!preg_match("/^([\x7f-\xff]+)$/",$group)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("社團名稱只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^([\x7f-\xff]+)$/",$teacher)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("指導老師只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^([\x7f-\xff]+)$/",$leader)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("負責人只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^([\x7f-\xff]+)$/",$leader2)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("負責人只能使用中文");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^[0-9]*$/",$phone)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("電話只能使用數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(!preg_match("/^[0-9]*$/",$phone2)){
	echo "<script type=\"text/javascript\">";
	echo 'alert("電話只能使用數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
} 

$sql = "INSERT INTO `event` (`name`, `group`, `place`, `other`, `startdate`, `finishdate`, `week`, `week2`, `content`, `teacher`, `leader`, `phone`, `leader2`, `phone2`, `applicant`, `pass`) VALUES ('{$name}', '{$group}', '{$place}', $other, '{$startdate}', '{$finishdate}', '{$week}', '{$week2}', '{$content}', '{$teacher}', '{$leader}', '{$phone}', '{$leader2}', '{$phone2}', '{$_SESSION['account']}', 0)";
//echo $sql;
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../show.php");
exit;
?>