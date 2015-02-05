<?php
require_once('control/html.php');
head();
?>
<script src="js/new.js"></script>
<form method="post" action="control/new.php">
	<label>活動名稱</label>
	<input class="form-control" name="name" required>
	<label>社團名稱</label>
	<input class="form-control" name="group" required>
	<label>活動地點</label>
	<select class="form-control" name="place" id="place" required>
		<?php
		require_once('control/database.php');
		$sql="SELECT * FROM place";
		$rs = $db->query($sql);
		while($row = $rs->fetch()){
			echo "<option value=".$row[name].">".$row[name]."</option>";
		}
		?>
		<option value="other">其他</option>
	</select>
	<div id="other">其他
	<input class="from-control" name="other">
	</div>
	<label>活動時間</label>
	<select class="form-control" name="week" required>
		<?php
		for($i=1;$i<21;$i++){
			echo "<option value=".$i.">".$i."</option>";
		}
		?>
	</select>
	<label>活動內容(500字內)</label>
	<textarea class="form-control" name="content" required></textarea> 
	<label>指導老師</label>
	<input class="form-control" name="teacher" required>
	<label>活動負責人</label>
	<input class="form-control" name="leader" required>
	<label>電話</label>
	<input class="form-control" name="phone" required>
	<label>活動負責人2</label>
	<input class="form-control" name="leader2" required>
	<label>電話</label>
	<input class="form-control" name="phone2" required>
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>