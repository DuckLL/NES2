<?php
require_once('control/html.php');
require_once('../control/define.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
?>
<table class="table table-hover">
<?php
for($i=0;$i<$placecount;$i++){
	echo '
	<tr>
		<td>'.$place[$i].'</td>
		<td><a class="btn btn-primary glyphicon glyphicon-trash" href="control/placedelete.php?id='.$i.'"> 刪除</a></td>
	</td>';
}
?>
</table>
<form method="post" action="control/newplace.php">
	<label>新增場地</label><br>
	<input class="form-control" name="newplace" required>
	<br>
	<input type="submit"  class="btn btn-primary" value="新增">
</form>
<hr/>
<div id="date">
<label>學期第一週的星期一</label>
<form method="post" action="control/date.php">
	<input class="col-md-6" type="date" name="firstday" value="<?php echo $firstdaystr;?>"required>
	<input class="btn btn-primary" type="submit" value="更新">
</form>
</div>
<?php
tail();
?>