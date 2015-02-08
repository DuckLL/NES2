<?php
require_once('control/html.php');
require_once('control/define.php');
head();
if(isset($_GET['id'])){
	$id=mysql_escape_string($_GET['id']);
	$sql="SELECT * FROM event WHERE id='{$id}'";
	$rs = $db->query($sql);
	if($row = $rs->fetch()){
		echo $row[id]."<br>";
		echo $row[name]."<br>";
		echo $row[place]."<br>";
		echo $allweek[$row[week]]."<br>";
		echo $row[teacher]."<br>";
		echo $row[leader]."<br>";
		if(isset($_SESSION['account']))
			echo $row[phone]."<br>";
		else
			echo "登入後才能查詢電話"."<br>";
		echo $row[leader2]."<br>";
		if(isset($_SESSION['account']))
			echo $row[phone2]."<br>";
		else
			echo "登入後才能查詢電話"."<br>";
		echo $row[content]."<br>";
		echo $row[submittime]."<br>";
		if($row[pass]==1)
			echo "審核通過"."<br>";
		elseif($row[pass]==0)
			echo "尚未審核"."<br>";
		else
			echo "審核退回"."<br>";
	}
}
tail();
?>