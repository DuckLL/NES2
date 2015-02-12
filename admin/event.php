<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
echo '
<script src="control/event.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/locale/bootstrap-table-zh-CN.min.js"></script>';
$sql="SELECT * FROM event ORDER BY id DESC";
$rs = $db->query($sql);
echo '<input type="checkbox" id="after">尚未開始的活動';
echo '<input type="checkbox" id="before">已經結束的活動';
echo '<input type="checkbox" id="pass">已通過';
echo '<input type="checkbox" id="unpass">未通過';
echo '
<table data-toggle="table" data-card-view="true">
	<thead>
		<tr>
			<th>Activity</tn>
			<th>club</th>
			<th>date</th>
			<th>place</th>
			<th>info</th>
			<th>status</th>
		</tr>
	</thead>';
while($row = $rs->fetch()){
	$done=$row[week]<$nowweek?'done':'undone';
	$pass=$row[pass]==1?'pass':'unpass';
	$link='<a href="../event.php?id='.$row[id].'">詳細內容</a>';
	echo '
	<tr class="'.$done.' '.$pass.'">
		<td>'.$row[name].'</td>
		<td>'.$row[group].'</td>
		<td>'.$row[week].'</td>
		<td>'.$row[place].'</td>
		<td>'.$link.'</td>';
	if($row[pass]==1){
		echo '
		<td>
			<span class="label label-success">審核通過</span>';
	}
	elseif($row[pass]==0){
		echo '
		<td>
			<span class="label label-default">尚未審核</span>';
	}
	else{
		echo '
		<td>
			<span class="label label-danger">審核退回</span>';
	}
	echo '
			<a style="float:right" class="btn btn-warning glyphicon glyphicon-trash" href="eventcheck.php?id='.$row[id].'"> 刪除</a>
			<a style="float:right" class="btn btn-danger glyphicon glyphicon-ban-circle" href="control/eventpass.php?id='.$row[id].'&pass=-1"> 退件</a>
			<a style="float:right" class="btn btn-default glyphicon glyphicon-minus" href="control/eventpass.php?id='.$row[id].'&pass=0"> 暫緩</a>
			<a style="float:right" class="btn btn-success glyphicon glyphicon-ok-circle" href="control/eventpass.php?id='.$row[id].'&pass=1"> 通過</a>
		</td>
	</tr>';
}
echo'
</table>';
tail();
?>