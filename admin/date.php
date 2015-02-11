<?php
require_once('control/html.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();
?>
<form method="post" action="control/date.php">
	
</form>
<?php
tail();
?>