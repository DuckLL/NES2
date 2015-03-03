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
忘記密碼請聯絡學生會<br>
開放時間 星期一～五 12:00~13:00
<?php
modalEnd();
tail();
?>