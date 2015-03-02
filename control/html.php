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
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/starter-template.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
					<ul class="nav navbar-nav">';
				if (!isset($_SESSION['account'])){ //not logged in
					echo '
					<li><a href="index.php" class="glyphicon glyphicon-home"> 公告</a></li>
					<li><a href="show.php" class="glyphicon glyphicon-search"> 登記狀況</a></li>';
				} 
				else{
					echo '
					<li><a href="index.php" class="glyphicon glyphicon-home"> 公告</a></li>
					<li><a href="show.php" class="glyphicon glyphicon-search"> 登記狀況</a></li>
					<li><a href="new.php" class="glyphicon glyphicon-plus"> 申請登記</a></li>';
				} 
				echo '
			</ul>
			<ul class="nav navbar-nav navbar-right">';
				if (!isset($_SESSION['account'])){
					echo '
					<li><a href="register.php" class="glyphicon glyphicon-pencil"> 註冊</a></li>
					<li><a href="login.php" class="glyphicon glyphicon-log-in"> 登入</a></li>';
				} 
				else{
					echo '
					<li><a href="edit.php" class="glyphicon glyphicon-user"> 資料維護</a></li>
					<li><a href="logout.php" class="glyphicon glyphicon-log-out"> 登出</a></li>';
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
function modalStart($id){
	echo '
	<div id="'.$id.'" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">忘記密碼</h4>
				</div>
				<div class="modal-body">';
				}
				function modalEnd(){
					echo '
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->';
}
?>
