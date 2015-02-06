<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$dsn='mysql:dbname=nes;host=localhost';
$user='nes';
$password='nesnes';
try{
	$db=new PDO($dsn,$user,$password);
	$db->exec("set names urt8");
}
catch(PDOException $e){
	dir('Database error'.$e->getMessage());
}
?>
