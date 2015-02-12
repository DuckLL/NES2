<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
$sql="SELECT count(*) FROM member";
$rs = $db->query($sql);
$row = $rs->fetch();
$total=$row[0];
$shownum=10;
$limit=floor($total/$shownum);
if(!isset($_GET['page']))
	$page=0;
else
	$page=mysql_escape_string($_GET['page']);
if($page<0)
	$page=0;
$offset=$page*$shownum;
$sql="SELECT * FROM member LIMIT ".$offset.",".$shownum;
$rs = $db->query($sql);
echo "總人數：".$total."<br>";
while($row = $rs->fetch()){
	echo $row[name];
	echo $row[school];
	echo $row[email];
	echo $row[phone];
	echo '<a href="membercheck.php?id='.$row[id].'">刪除</a>';
	echo "<br>";
}
if($page>0)
	echo '<a href="member.php?page='.($page-1).'">前一頁</a>';
for($i=0;$i<=$limit;$i++){
	echo '<a href="member.php?page='.$i.'">'.$i.'</a>';
}
if($page<$limit)
	echo '<a href="member.php?page='.($page+1).'">後一頁</a>';
tail();
?>