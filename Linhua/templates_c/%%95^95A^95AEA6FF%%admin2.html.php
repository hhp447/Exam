<?php /* Smarty version 2.6.25-dev, created on 2016-12-20 13:03:34
         compiled from admin2.html */ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>试题</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./another_css/exam.css" />
		<link rel="stylesheet" type="text/css" href="./another_css/student1.css" />
		<link rel="stylesheet" type="text/css" href="./Font-Awesome-3.2.1/css/font-awesome.css" />
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.css" />
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script>
			$(function() {
				$('#editControls a').click(function(e) {
					switch($(this).data('role')) {
						case 'h1':
						case 'h2':
						case 'p':
							document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
							break;
						default:
							document.execCommand($(this).data('role'), false, null);
							break;
					}
				})
			});
		</script>
	</head>

	<body>

		<nav id="heading" class="navbar-default navbar-fixed-top">
			<a href="admin.php">
				<span class="glyphicon glyphicon-home"></span>
			</a>
		</nav>
		<br /><br />
		<h2 align="center"><?php echo $this->_tpl_vars['ex_name']; ?>
</h2>
		<div class="container">



			<!--单项选择题-->
			<div class="container_unit">
				<strong><h4>一、单项选择题</h4><strong>
				<?php echo $this->_tpl_vars['exam']['xuan']; ?>

			</div>





			
			<!--填空题-->
			<div class="container_unit">
				<strong><h4>二、填空题</h4><strong>
				<?php echo $this->_tpl_vars['exam']['tian']; ?>

			</div>





			<!--程序运行结果题-->
			<div class="container_unit">
				<strong><h4>三、程序运行结果题</h4><strong>
					<?php echo $this->_tpl_vars['exam']['cheng']; ?>

			</div>






			<!--编程题-->
			<div class="container_unit">
				<strong><h4>四、编程题</h4><strong>
				<?php echo $this->_tpl_vars['exam']['bian']; ?>

			</div>

		</div>

	</body>

</html>