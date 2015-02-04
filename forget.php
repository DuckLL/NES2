<?php
require_once('control/html.php');
head();
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
tail();
?>
