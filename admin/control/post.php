<?php
require_once('../../control/database.php');
if($_SESSION['account']!=='admin'||!isset($_POST['content'])){
	header("Location: ../../error.php");
	exit;
}
$content=mysql_escape_string($_POST['content']);
$sql = "UPDATE config SET about='{$content}' WHERE id=1";
$rs = $db->prepare($sql);
$rs->execute();
echo "<script type=\"text/javascript\">";
echo 'alert("修改成功！");';
echo "history.go(-1);";
echo "</script>";
?>