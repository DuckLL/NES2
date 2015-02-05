<?php
require_once('control/html.php');
head();
?>
<form method="post" action="control/login.php">
	<label >帳號</label>
	<input class="form-control ng-pristine ng-valid" name="account" required>
	<br>
	<label>密碼</label>
	<input class="form-control password ng-pristine ng-valid" type="password" name="password" required>
	<br>
	<input type="submit" value="登入" class="btn btn-primary" align="left">
	<a href="#forget" class="btn btn-warning pull-right" align="center" data-toggle="modal" data-target="#forget">忘記密碼</a>						
</form>
<?php
modalStart('forget');
?>
<script src="js/forget.js"></script>
<label>帳號</label>
<input class="form-control" name="account" id="account" required>
<label>學號</label>
<input class="form-control" name="school" id="school" required>	
<label>校外電子信箱</label>
<input class="form-control" type="email" name="email" id="email" required>
<label>電話</label>
<input class="form-control" name="phone" id="phone" required>
<br>
<input type="submit" class="btn btn-primary" value="送出" id="submit" style="float:right;">
<label id="newpassword"></label>
<?php
modalEnd();
tail();
?>