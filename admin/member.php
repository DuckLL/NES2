<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
echo '
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/locale/bootstrap-table-zh-CN.min.js"></script>';
$sql="SELECT count(*) FROM member";
$rs = $db->query($sql);
$row = $rs->fetch();
$total=$row[0];
$shownum=10;
$limit=ceil($total/$shownum);
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
echo '
<table data-toggle="table" data-card-view="true">
	<thead>
		<tr>
			<th>Account</tn>
			<th>Name</th>
			<th>ShoolNumber</th>
			<th>email</th>
			<th>cell</th>
			<th></th>
		</tr>
	</thead>';
	while($row = $rs->fetch()){
		echo '
		<tr>
			<td>'.$row[account].'</td>
			<td>'.$row[name].'</td>
			<td>'.$row[school].'</td>
			<td>'.$row[email].'</td>
			<td>'.$row[phone].'</td>
			';
			if($row[account]!=='admin'){
				echo '
				<td><a class="btn btn-primary glyphicon glyphicon-trash" href="membercheck.php?id='.$row[id].'">刪除</a></td>
			</tr>
			';
		}
	}
	echo '
</table>';
echo '
<nav align="center">
	<ul class="pagination">';
		if ($page>0) {
			$backward = "";
		} else {
			$backward = "disabled";
		}
		echo '<li class="'.$backward.'"><a href="member.php?page='.($page-1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		for ($i=1;$i<$limit+1;$i++){
			if ($page+1==$i) {
				echo '<li class="active"><a href="member.php?page='.($i-1).'">'.$i.'</a></li>';
			} else {
				echo '<li><a href="member.php?page='.($i-1).'">'.$i.'</a></li>';
			}
		}
		if ($page<$limit) {
			$forward = "";
		} else {
			$forward = "disabled";
		}
		echo '<li class="'.$forward.'"><a href="member.php?page='.($page+1).'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul>
	</nav>';
	tail();
	?>