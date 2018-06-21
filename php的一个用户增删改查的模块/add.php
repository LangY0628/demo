﻿<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
	    *{
	    	font-family: 微软雅黑；
	    }
    </style>
</head>
<body>
	<div class="container">
		<h1 class="page-header">
			<a href="" class='btn btn-primary'>添加用户</a>
			<a href="index.php" class='btn btn-warning'>查看用户</a>
		</h1>

		<form action="insert.php" method="post">
			<div class="form-group">
				<label for="">用户名</label>
				<input class="form-control" type="text" name="username">
			</div>
			<div class="form-group">
				<label for="">密码</label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="提交">
				<input type="reset" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>
</html>