<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
$sql="SELECT * FROM event ";
$rs = $db->query($sql);
while($row = $rs->fetch()){
	echo '<div class="week'.$row[week].' pass'.$row[pass].'">';
	echo $row[name];
	echo $row[group];
	echo $row[week];
	echo $row[place];
	if($row[pass]==1){
		echo '
		<span class="label label-success">審核通過</span>';
	}
	elseif($row[pass]==0){
		echo '
		<span class="label label-default">尚未審核</span>';
	}
	else{
		echo '
		<span class="label label-danger">審核退回</span>';
	}
	echo '<a class="btn btn-success" href="control/eventpass.php?id='.$row[id].'&pass=1">通過</a>';
	echo '<a class="btn btn-default" href="control/eventpass.php?id='.$row[id].'&pass=0">暫緩</a>';
	echo '<a class="btn btn-danger" href="control/eventpass.php?id='.$row[id].'&pass=-1">退件</a>';
	echo '<a class="btn btn-warning" href="eventcheck.php?id='.$row[id].'">刪除</a>';
	echo '</div>';
}
tail();
?>