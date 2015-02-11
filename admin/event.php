<?php
require_once('control/html.php');
if($_SESSION['account']!=='admin'){
	header("Location: ../error.php");
	exit;
}
head();

tail();
?>