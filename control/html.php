<?php 
session_start();
function head(){
echo'
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>國立嘉義大學社團活動系統</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/starter-template.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">國立嘉義大學社團活動系統</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">國立嘉義大學社團活動系統</a>
			</div>
			<div class="navbar-collapse collapse" style="height: 1px;">
				<ul class="nav navbar-nav">';
				if (empty($_SESSION['account'])){ //not logged in
					echo '
					<li><a href="index" class="glyphicon glyphicon-home">公告</a></li>
					<li><a href="show" class="glyphicon glyphicon-search">登記狀況</a></li>';
				} 
				elseif ($_SESSION['account']!='admin') { //average user
					echo '
					<li><a href="index" class="glyphicon glyphicon-home">公告</a></li>
					<li><a href="show" class="glyphicon glyphicon-search">登記狀況</a></li>
					<li><a href="new" class="glyphicon glyphicon-plus">申請登記</a></li>';
				} 
				else{ //adminitrator
					echo '
					<li><a href="admin/post">管理公告</a></li>
					<li><a href="admin/event">管理登記</a></li>
					<li><a href="admin/member">會員管理</a></li>
					<li><a href="admin/place">場地管理</a></li>
					<li><a href="admin/date">時間管理</a></li>';
				}
echo '
				</ul>
				<ul class="nav navbar-nav navbar-right">';
				if (empty($_SESSION['account'])){
					echo '
					<li><a href="register" class="glyphicon glyphicon-pencil">註冊</a></li>
					<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>';
				} 
				elseif ($_SESSION['account']!='admin') {
					echo '
					<li><a href="edit.php" class="glyphicon glyphicon-user">資料維護</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>';
				} 
				else{
					echo '
					<li><a href="edit.php" class="glyphicon glyphicon-user">資料維護</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>';
				}
echo '
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
