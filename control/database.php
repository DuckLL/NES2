<?php
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
