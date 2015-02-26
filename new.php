<?php
require_once('control/html.php');
require_once('control/define.php');
if(!isset($_SESSION['account'])){
	header("Location: error.php");
	exit;
}
head();
?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script src="js/new.js"></script>
<form method="post" action="control/new.php" class="form-inline">
	<table class="table" style="border:1px solid black">
		<tr style="border:1px solid black">
			<td colspan="2" style="border:1px solid black">
				<label class="col-sm-2 control-label">活動名稱</label>
				<div class="col-sm-10">
			      <input class="form-control" name="name" size="100" required>
    			</div>
			</td>
		</tr>
		<tr style="border:1px solid black">
			<td colspan="2" style="border:1px solid black">
			    <label class="col-sm-2 control-label">活動時間</label>
				<div class="col-sm-10">
				<input class="form-control" type="date" name="startdate" required>
				~
				<input class="form-control" type="date" name="finishdate" required>
			    </div>
			</td>
		</tr>
		<tr style="border:1px solid black">
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
			<td id="other">
				<label>其他地點</label>
				<input class="form-control" name="other">
				</div>
			</td>
		</tr>
		<tr style="border:1px solid black">
			<td style="border:1px solid black">
				<label>社團名稱</label>
				<input class="form-control" name="group" required>
			</td>
			<td style="border:1px solid black">
				<label>活動負責人</label>
				<input class="form-control" name="leader" required>
				<label>電話</label>
				<input class="form-control" name="phone" required>
			</td>
		</tr>
		<tr style="border:1px solid black">
			<td style="border:1px solid black">
				<label>指導老師</label>
				<input class="form-control" name="teacher" required>
			</td>
			<td style="border:1px solid black">
				<label>活動負責人2</label>
				<input class="form-control" name="leader2" required>
				<label>電話</label>
				<input class="form-control" name="phone2" required>
			</td>
		</tr>
	</table>
	<label>活動內容(500字內)</label>
	<textarea class="form-control ckeditor" name="content" required cols="100" rows="20"></textarea> 
	<br>
	<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>
