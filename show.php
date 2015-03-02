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
				$sql="SELECT * FROM event WHERE place='".$place[$j]."' and (week=".$i." or week2=".$i." ) ORDER BY `id` ASC";
				$rs = $db->query($sql);
				while($row = $rs->fetch()){
					if($row[pass]==-1){
						echo '<a href="event.php?id='.$row[id].'" class="btn btn-danger">'.$row[name]."</a><br>";
					}
					if($row[pass]==0){
						echo '<a href="event.php?id='.$row[id].'" class="btn btn-info">'.$row[name]."</a><br>";
					}
					if($row[pass]==1){
						echo '<a href="event.php?id='.$row[id].'" class="btn btn-success">'.$row[name]."</a><br>";
					}
					if($row[pass]==2){
						echo '<a href="event.php?id='.$row[id].'" class="btn btn-warning">'.$row[name]."</a><br>";
					}
				}
				echo "</th>";
			}
			echo "<th>";
			$sql="SELECT * FROM event WHERE other=1 and (week=".$i." or week2=".$i." ) ORDER BY `id` ASC";
			$rs = $db->query($sql);
			while($row = $rs->fetch()){
				if($row[pass]==-1){
					echo '<a href="event.php?id='.$row[id].'" class="btn btn-danger">'.$row[name]."</a><br>";
				}
				if($row[pass]==0){
					echo '<a href="event.php?id='.$row[id].'" class="btn btn-info">'.$row[name]."</a><br>";
				}
				if($row[pass]==1){
					echo '<a href="event.php?id='.$row[id].'" class="btn btn-success">'.$row[name]."</a><br>";
				}
				if($row[pass]==2){
					echo '<a href="event.php?id='.$row[id].'" class="btn btn-warning">'.$row[name]."</a><br>";
				}
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