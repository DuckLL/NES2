<?php 
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
				<a class="navbar-brand">國立嘉義大學社團活動系統</a>
			</div>
			<div class="navbar-collapse collapse" style="height: 1px;">
				<ul class="nav navbar-nav">';
				}
				function tail(){
					echo'
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<div class="container">
		<div class="starter-template">
		</div>
	</div>
</body>
</html>';
}
?>