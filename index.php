<?php 
require_once('control/html.php');
require_once('control/database.php');
head();
$sql="SELECT * FROM config";
$rs = $db->query($sql);
$row = $rs->fetch();
echo $row[about];
tail();
?>
