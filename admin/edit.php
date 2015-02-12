<?php
require_once('control/html.php');
require_once('../control/database.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
$sql="SELECT * FROM member WHERE account='admin'";
$rs = $db->query($sql);
$row = $rs->fetch();
?>
<script src="../js/edit.js"></script>
<form method="post" action="../control/cgpw.php">
	<label >舊密碼</label>
	<input class="form-control" type="password" name="oldpassword" required>
	<label>新密碼</label>
	<input class="form-control" type="password" name="password" id="password" required>
	<label>密碼確認</label>
	<input class="form-control" type="password" name="password2" id="password2" required>
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出（成功修改後系統將會自動登出，請重新登入）" style="float:right;">	
</form>
<br>
<br>
<form method="post" action="../control/edit.php">
	<label>真實姓名（ex:王大明）</label>
	<input class="form-control" type="text" name="name" value="<?php echo $row[name];?>" required>
	<label>學號（ex:1001234）</label>
	<input class="form-control" type="text" name="school" value="<?php echo $row[school];?>" required>	
	<label>校外電子信箱</label>
	<input class="form-control" type="email" name="email" value="<?php echo $row[email];?>" required>
	<label>手機（ex:0912345678）</label>
	<input class="form-control" type="text" name="phone" value="<?php echo $row[phone];?>" required>
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>