<?php
header("Content-type: text/html; charset=utf-8");
session_start();
function head(){
	echo'
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>國立嘉義大學大型活動申請系統</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="../css/starter-template.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<script src="../js/jquery-2.1.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">國立嘉義大學大型活動申請系統</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">國立嘉義大學大型活動申請系統</a>
				</div>
				<div class="navbar-collapse collapse" style="height: 1px;">
					<ul class="nav navbar-nav">
						<li><a href="./"> 公告管理</a></li>
						<li><a href="event.php"> 活動管理</a></li>
						<li><a href="member.php"> 會員管理</a></li>
						<li><a href="place_date.php"> 系統管理</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="edit.php" class="glyphicon glyphicon-user"> 資料維護</a></li>
						<li><a href="../logout.php" class="glyphicon glyphicon-log-out"> 登出</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div> <!--end of navbar-->
		<div class="container">
			<div class="starter-template">';
			}
			function tail(){
				echo'
			</div>
		</div>
	</body>
	</html>';
}
?>
