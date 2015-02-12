<?php
require_once('control/html.php');
require_once('control/define.php');
head();
?>
<table class="table table-bordered small">
	<thead>
		<tr>
			<th>周次</th>
			<?php
			for($i=0;$i<$placecount;$i++){
				echo '<th>'.$place[$i]."</th>";
			}
			?>
			<th>其他</th>
		</tr>
	</thead>
	<tbody>
	<?php
	for($i=0;$i<20;$i++){
		echo "<tr>";
		echo "<th>".($i+1)."</th>";
		for($j=0;$j<$placecount;$j++){
			echo "<th>";
			$sql="SELECT * FROM event WHERE week=".$i." and place='".$place[$j]."' and pass=1 ORDER BY `id` ASC";
			$rs = $db->query($sql);
			while($row = $rs->fetch()){
				echo '<a href="event.php?id='.$row[id].'" class="btn btn-success">'.$row[name]."</a><br>";
			}
			$sql="SELECT * FROM event WHERE week=".$i." and place='".$place[$j]."' and pass=0 ORDER BY `id` ASC";
			$rs = $db->query($sql);
			while($row = $rs->fetch()){
				echo '<a href="event.php?id='.$row[id].'"  class="btn btn-info">'.$row[name]."</a><br>";
			}
			echo "</th>";
		}
		echo "<th>";
			$sql="SELECT * FROM event WHERE week=".$i." and other=1 and pass=1 ORDER BY `id` ASC";
			$rs = $db->query($sql);
			while($row = $rs->fetch()){
				echo '<a href="event.php?id='.$row[id].'" class="btn btn-success">'.$row[name]."</a><br>";
			}
			$sql="SELECT * FROM event WHERE week=".$i." and other=1 and pass=0 ORDER BY `id` ASC";
			$rs = $db->query($sql);
			while($row = $rs->fetch()){
				echo '<a href="event.php?id='.$row[id].'"  class="btn btn-info">'.$row[name]."</a><br>";
			}
			echo "</th>";
		echo "</tr>";
	}
	?>
	</tbody>
</table>
<?php
tail();
?>