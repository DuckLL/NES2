<?php
require_once('control/html.php');
require_once('control/define.php');
head();
echo '<script src="js/event.js"></script>';
if(isset($_GET['id'])){
	$id=mysql_escape_string($_GET['id']);
	$sql="SELECT * FROM event WHERE id='{$id}'";
	$rs = $db->query($sql);
	if($row = $rs->fetch()){
		echo '
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-2">活動名稱:</div>
				<div class="col-md-10"><strong>'.$row[name].'</strong></div>
			</div>
			<div class="row">
				<div class="col-md-2">借用地點:</div>
				<div class="col-md-10"><strong>'.$row[place].'</strong></div>
			</div>
			<div class="row">
				<div class="col-md-2">活動日期:</div>
				<div class="col-md-10"><strong>'.$row[startdate].'~'.$row[finishdate].'</strong></div>
			</div>
			<div class="row">
				<div class="col-md-2">指導老師:</div>
				<div class="col-md-10"><strong>'.$row[teacher].'</strong></div>
			</div>';
			echo '
			<div class="row">
				<div class="col-md-2">負責人1:</div>
				<div class="col-md-2"><strong>'.$row[leader].'</strong></div>';
				if(isset($_SESSION['account']))
					echo '
				<div class="col-md-8">'.$row[phone].'</div>
			</div>';
			else
				echo '
			<div class="col-md-8"><em>"登入後才能查詢電話"</em></div>
		</div>';
		echo '
		<div class="row">
			<div class="col-md-2">負責人2:</div>
			<div class="col-md-2"><strong>'.$row[leader2].'</strong></div>';
			if(isset($_SESSION['account']))
				echo '
			<div class="col-md-8">'.$row[phone2].'</div>
		</div>';
		else
			echo '
		<div class="col-md-8"><em>"登入後才能查詢電話"</em></div>
	</div>';
	echo '<div class="well" style="background-color:#ffe680;word-wrap:break-word">'.$row[content].'</div>';
	echo '
	<div class="row">
		<div class="col-md-2">申請時間:</div>
		<div class="col-md-3"><strong>'.$row[submittime].'</strong></div>
		<div class="col-md-2">申請人:</div>
		<div class="col-md-3"><strong>'.$row[applicant].'</strong></div>';
		if($row[pass]==1)
			echo '
		<div class="col-md-2" style="float:right;"><span class="label label-success"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> 審核通過</span></div>';
		elseif($row[pass]==0)
			echo '
		<div class="col-md-2"><span class="label label-default"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 尚未審核</span></div>';
		elseif($row[pass]==2)
			echo '
		<div class="col-md-2"><span class="label label-warning"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 重新審核中</span></div>';
		else
			echo '
		<div class="col-md-2"><span class="label label-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> 審核退回</span></div>';
		echo '
	</div>';
	if($row[pass]==-1)
		echo '<div class="well" style="background-color:#e88;word-wrap:break-word">'.$row[withdraw].'</div>';
	echo '
	<p><a class="btn btn-primary btn-lg" onclick="history.back()" role="button">返回</a>';
		if($row[applicant]==$_SESSION['account']){
			echo '<button class="btn btn-warning btn-lg" id="require" style="float:right">刪除</button>';
			echo '<a class="btn btn-danger btn-lg" id="delete" style="float:right" href="control/delete.php?id='.$row[id].'">確定刪除</a>';
		}
		echo '
	</p></div>';

}
}
tail();
?>
