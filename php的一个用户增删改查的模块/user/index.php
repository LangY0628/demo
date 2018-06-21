<?php
include'config.php';

$length=5;
@$page=$_GET['p']?$_GET['p']:1;
$offset=($page-1)*$length;

$sqlTot="select count(*) from user";
$smtTot=$pdo->prepare($sqlTot);
$smtTot->execute();
$tot=$smtTot->fetchColumn();
$pages=ceil($tot/$length);

$next=$page+1;
if($next>=$pages) {
	$next=$pages;
}

$prev=$page-1;
if($prev<=1) {
	$prev=1;
}


$sql="select * from user limit {$offset},{$length}";
$smt=$pdo->prepare($sql);
$smt->execute();
$rows=$smt->fetchAll();
 ?>
<!DOCTYPE html>
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
			<a href="add.php" class='btn btn-primary'>添加用户</a>
			<a href="index.php" class='btn btn-warning'>查看用户</a>
		</h1>
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['username']}</td>";
				echo "<td>{$row['password']}</td>";
				echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success'>修改</a></td>";
				echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger delete'>删除</a></td>";
			}
			 ?>
		</table>
		<div>
			<a href="index.php?p=<?php echo $prev ?>" class="btn btn-primary">上一页</a>
			<a href="index.php?p=<?php echo $next ?>" class="btn btn-danger">下一页</a>
		</div>
		
	</div>

</body>
<script>
	$('.delete').click(function(){
		yz=confirm('确认删除?')
		if (!yz) {
			return false
		}
	})
</script>
</html>