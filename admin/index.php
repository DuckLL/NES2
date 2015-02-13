<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<form method="post" action="control/post.php" class="form-inline">
	<label>公告</label>
	<textarea class="form-control ckeditor" name="content" required rows="100%" cols="100%">
		<?php
		$sql="SELECT * FROM config";
		$rs = $db->query($sql);
		$row = $rs->fetch();
		echo $row[about];
		?>
	</textarea>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">
</form>
<?php
tail();
?>