<?php
require_once('control/html.php');
require_once('../control/define.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
for($i=0;$i<$placecount;$i++){
	echo $place[$i];
	echo '<a href="control/placedelete.php?id='.$i.'">刪除</a><br>';
}
?>
<form method="post" action="control/newplace.php">
<label>新增場地</label><br>
	<input class="form-control" name="newplace" required>
	<br>
	<input type="submit"  class="btn btn-primary" value="新增">
</form>
<?php
tail();
?>