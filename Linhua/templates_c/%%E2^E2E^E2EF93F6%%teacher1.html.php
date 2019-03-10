<?php /* Smarty version 2.6.25-dev, created on 2016-12-14 12:30:51
         compiled from teacher1.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="name" content="width=device-width,initial-scale=1"/>
		<title>批改实验</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/teacher1.css" />
		<script type="text/javascript" src="bootstrap-3.3.5-dist/js/feny.js"></script>
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li>
					<a href="teacher.php?number=<?php echo $this->_tpl_vars['number']; ?>
&name=<?php echo $this->_tpl_vars['name']; ?>
"><span class="glyphicon glyphicon-home">主页</span></a>
				</li>
				<li><a href="./main.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			<hr />
			<!--统计实验人数-->
			
			<!--主要内容-->
			<div id="result">
			
			<script>
			 dopage('result' ,'teacher1_ajax.php?id=<?php echo $this->_tpl_vars['id']; ?>
&name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
')
			</script>
			</div>
			
			
			<hr />
		</div>
	</body>
</html>