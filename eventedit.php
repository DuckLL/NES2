<?php
require_once('control/html.php');
require_once('control/define.php');
if(!isset($_SESSION['account'])||!isset($_GET['id'])){
	header("Location: error.php");
	exit;
}
$id=strip_tags(mysql_escape_string($_GET['id']));
$sql="SELECT * FROM event WHERE id='{$id}'";
$rs = $db->query($sql);
if($row = $rs->fetch()){
	if($row[applicant]!=$_SESSION['account']){
		header("Location: error.php");
		exit;
	}
}
else{
	header("Location: error.php");
	exit;
}
head();
?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<form method="post" action="control/eventedit.php?id=<?php echo $id; ?>" class="form-inline">
	<table class="table" style="border:1px solid black">
		<tr style="border:1px solid black">
			<td colspan="2" style="border:1px solid black">
				<label class="col-sm-2 control-label">活動名稱</label>
				<div class="col-sm-10">
					<input class="form-control" name="name" size="100" required value="<?php echo $row[name]; ?>">
				</div>
			</td>
		</tr>
		<tr style="border:1px solid black">
			<td colspan="2" style="border:1px solid black">
				<label class="col-sm-2 control-label">活動時間</label>
				<div class="col-sm-10">
					<input class="form-control" type="date" name="startdate" required value="<?php echo $row[startdate]; ?>">
					~
					<input class="form-control" type="date" name="finishdate" required value="<?php echo $row[finishdate]; ?>">
					<label>(yyyy-mm-dd)目前可以借到第<?php echo $nowweek+13;?>週</label>
				</div>
			</td>
		</tr>
		<tr style="border:1px solid black">
			<td>
				<label>活動地點</label>
				<select class="form-control" name="place" id="place"  required>
					<?php
					$other=1;
					for($i=0;$i<$placecount;$i++){
						if($row[place]==$place[$i]){
							echo "<option selected value=".$place[$i].">".$place[$i]."</option>";
							$other=0;
						}
						else{
							echo "<option value=".$place[$i].">".$place[$i]."</option>";
						}
					}
					if($other==1)
						echo'<option value="other" selected>其他</option>';
					else
						echo'<option value="other">其他</option>';
					?>
					
				</select>
			</td>
			<td id="other">
				<label>目前地點</label>
				<input class="form-control" name="other" value="<?php echo $row[place]; ?>">
			</div>
		</td>
	</tr>
	<tr style="border:1px solid black">
		<td style="border:1px solid black">
			<label>社團名稱</label>
			<label><?php echo $_SESSION['groups'];?></label>
		</td>
		<td style="border:1px solid black">
			<label>活動負責人</label>
			<input class="form-control" name="leader" required value="<?php echo $row[leader]; ?>">
			<label>電話</label>
			<input class="form-control" name="phone" required value="<?php echo $row[phone]; ?>">
		</td>
	</tr>
	<tr style="border:1px solid black">
		<td style="border:1px solid black">
			<label>指導老師</label>
			<input class="form-control" name="teacher" required value="<?php echo $row[teacher]; ?>">
		</td>
		<td style="border:1px solid black">
			<label>活動負責人2</label>
			<input class="form-control" name="leader2" required value="<?php echo $row[leader2]; ?>">
			<label>電話</label>
			<input class="form-control" name="phone2" required value="<?php echo $row[phone2]; ?>">
		</td>
	</tr>
	<tr style="border:1px solid black">
		<td style="border:1px solid black" colspan="2">
			<label>企劃書</label>
			<input class="form-control" size="100" name="plan" required value="<?php echo $row[plan]; ?>">
		</td>
	</tr>
</table>
<label>活動內容(500字內 企劃書請附上連結)</label>
<textarea class="form-control ckeditor" name="content" required cols="100" rows="20"> 
	<?php echo $row[content]; ?>
</textarea>
<br>
<input type="submit"  class="btn btn-primary"  id="submit" value="送出" style="float:right;">	
</form>
<?php
tail();
?>
