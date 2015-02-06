<?php
require_once('database.php');
$sql="SELECT * FROM config";
$rs = $db->query($sql);
$row = $rs->fetch();
//echo $row[firstday];
$firstday=explode('-', $row[firstday]);
$year=$firstday[0];
$month=$firstday[1];
$day=$firstday[2];
date_default_timezone_set('Asia/Taipei');
$firstdaytimestamp=mktime(0,0,0,$month,$day,$year);
//製造20周
for($i=0;$i<20;$i++){
	$weekstamp[$i]=$firstdaytimestamp+$i*7*24*60*60;
	$week[$i]=getdate($weekstamp[$i]);
	$weekendstamp[$i]=$weekstamp[$i]+4*24*60*60;
	$weekend[$i]=getdate($weekendstamp[$i]);
	$allweek[$i]=$week[$i][year]." - ".str_pad($week[$i][mon],2,"0",STR_PAD_LEFT)." - ".str_pad($week[$i][mday],2,"0",STR_PAD_LEFT)." ~ ".$weekend[$i][year]." - ".str_pad($weekend[$i][mon],2,"0",STR_PAD_LEFT)." - ".str_pad($weekend[$i][mday],2,"0",STR_PAD_LEFT);
	//echo $strweek[$i]."<br>";
}
//nowweek
$now=mktime();
$nowweek=ceil(($now-$firstdaytimestamp)/(7*24*60*60));
//echo $nowweek;
?>