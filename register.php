<?php
require_once('control/html.php');
head();
?>
<script src="js/register.js"></script>
<form method="post" action="control/register.php">
	<label >帳號</label>
	<input class="form-control" name="account" id="account" onkeyup="checkRegAcc()" required>
	<span id="msg_user_name"></span>
	<br>
	<label>密碼</label>
	<input class="form-control" type="password" name="password" id="password" required>
	<label>密碼確認</label>
	<input class="form-control" type="password" name="password2" id="password2" required>
	<label>真實姓名（ex:王大明）</label>
	<input class="form-control" type="text" name="name" required>
	<label>學號（ex:1001234）</label>
	<input class="form-control" type="text" name="school" required>	
	<label>校外電子信箱</label>
	<input class="form-control" type="email" name="email" required>
	<label>手機（ex:0912345678）</label>
	<input class="form-control" type="text" name="phone" required>
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>