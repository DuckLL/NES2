<?php
require_once('control/html.php');
require_once('../control/define.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
?>
<form method="post" action="control/date.php">
	<input class="col-md-6" type="date" name="firstday" value="<?php echo $firstdaystr;?>"required>
	<input class="btn btn-primary" type="submit" value="更新">
</form>
<?php
tail();
?>