<?php /* Smarty version 2.6.25-dev, created on 2016-07-29 14:32:47
         compiled from admin_modify.html */ ?>
﻿<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta charset="UTF-8">
		<title>修改用户信息</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/admin_modify.css" />
		
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li><a href="admin.php"><span class="glyphicon glyphicon-user">主页</span></a></li>
				<li><a href="admin_login.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			<!--主体-->
			<hr />
			<form action="./admin_modify.php?number=<?php echo $this->_tpl_vars['content']['number']; ?>
&indentity=<?php echo $this->_tpl_vars['content']['indentity']; ?>
" method="POST">
			<div class="info">
				   <div class="input-group">
					<div class="input-group-addon">姓名</div>
						<input type="text" value="<?php echo $this->_tpl_vars['content']['name']; ?>
" name="up_name" class="form-control"/>
					</div>
					<br />
					<div class="input-group">
						<div class="input-group-addon">性别</div>
							<input type="text" value="<?php echo $this->_tpl_vars['content']['sex']; ?>
" class="form-control" name="sex" />
						</div>
						<br /> 
					<div class="input-group">
							<div class="input-group-addon">密码</div>
							<input type="text" value="<?php echo $this->_tpl_vars['content']['passwd']; ?>
" name="up_passwd" class="form-control"/>
						</div>
						<br />
					<div class="input-group">
						<div class="input-group-addon">学校</div>
							<input type="text" value="<?php echo $this->_tpl_vars['content']['school']; ?>
" name="up_school" class="form-control"/>
						</div>
					<br />
						<div class="input-group">
							<div class="input-group-addon">邮箱</div>
							<input type="text" value="<?php echo $this->_tpl_vars['content']['email']; ?>
" name="up_email" class="form-control"/>
						</div>
						<br />
						
						 
						<div class="input-group">
							<div class="input-group-addon">专业/学历</div>
							<input type="text" value="<?php echo $this->_tpl_vars['content']['major_education']; ?>
" class="form-control" name="up_ma_ed" />
						</div>
						<br />
						<!--  <a href="javascript:login()" class="btn btn-default form-control" >确认修改</a>  -->
						<input type="submit" name="submit" value="确认修改" class="btn btn-default form-control"> 
			</div>
			</form>
			<hr />
		</div>
	</body>
</html>