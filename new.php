<?php
require_once('control/html.php');
require_once('control/define.php');
head();
?>
<script src="js/new.js"></script>
<form method="post" action="control/new.php" class="form-inline">
	<table class="table">
		<tr>
			<td colspan="2">
				<label class="col-sm-2 control-label">活動名稱</label>
				<div class="col-sm-10">
			      <input class="form-control" name="name" size="100" required>
    			</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			    <label class="col-sm-2 control-label">活動時間</label>
				<div class="col-sm-10">
					<select class="form-control" name="week" required>
						<?php
						for($i=$nowweek;$i<$nowweek+12&&$i<20;$i++){
							if($i<0)
								continue;
							echo "<option value=".$i.">第".($i+1)."週-----------".$allweek[$i]."</option>";
						}
						?>
					</select>
			    </div>
			</td>
		</tr>
		<tr>
			<td>
				<label>活動地點</label>
				<select class="form-control" name="place" id="place"  required>
					<?php
					for($i=0;$i<$placecount;$i++){
						echo "<option value=".$place[$i].">".$place[$i]."</option>";
					}
					?>
					<option value="other">其他</option>
				</select>
			</td>
		</tr>
		<tr>
			<td rowspan="3">
				<label>社團名稱</label>
				<input class="form-control" name="group" required>
			</td>
			<td>
				<label>活動負責人</label>
				<input class="form-control" name="leader" required>
				<label>電話</label>
				<input class="form-control" name="phone" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>活動負責人2</label>
				<input class="form-control" name="leader2" required>
				<label>電話</label>
				<input class="form-control" name="phone2" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>指導老師</label>
				<input class="form-control" name="teacher" required>
			</td>
		</tr>
	</table>
	<label>活動內容(500字內)</label>
	<textarea class="form-control" name="content" required cols="100" rows="20"></textarea> 
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>
