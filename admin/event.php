<?php
require_once('control/html.php');
require_once('../control/define.php');
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
<table data-toggle="table" data-card-view="true" class="small">
	<thead>
		<tr>
			<th>活動名稱</tn>
			<th>申請單位</th>
			<th>活動時間</th>
			<th>活動地點</th>
			<th>詳細資訊</th>
			<th>審核狀況</th>
		</tr>
	</thead>';
while($row = $rs->fetch()){
	$done=$row[week]<$nowweek?'done':'undone';
	$pass=$row[pass]==1?'pass':'unpass';
	$link='<a href="eventcheck.php?id='.$row[id].'">詳細內容</a>';
	echo '
	<tr class="'.$done.' '.$pass.'">
		<td>'.$row[name].'</td>
		<td>'.$row[group].'</td>
		<td>第'.($row[week]+1).'週 '.$row[startdate].'~'.$row[finishdate].'</td>
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
	elseif($row[pass]==2){
		echo '
		<td>
			<span class="label label-warning">重新審核</span>';
	}
	else{
		echo '
		<td>
			<span class="label label-danger">審核退回</span>';
	}
	echo '
			<a style="float:right" class="btn btn-default glyphicon glyphicon-trash" href="eventcheck.php?id='.$row[id].'&delete=1"> 刪除</a>
			<a style="float:right" class="btn btn-danger glyphicon glyphicon-ban-circle" href="control/eventpass.php?id='.$row[id].'&pass=-1"> 退件</a>
			<a style="float:right" class="btn btn-warning glyphicon glyphicon-minus" href="control/eventpass.php?id='.$row[id].'&pass=2"> 重審</a>
			<a style="float:right" class="btn btn-success glyphicon glyphicon-ok-circle" href="control/eventpass.php?id='.$row[id].'&pass=1"> 通過</a>
		</td>
	</tr>';
}
echo'
</table>';
tail();
?>