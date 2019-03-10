<?php /* Smarty version 2.6.25-dev, created on 2016-07-30 08:14:36
         compiled from admin_login.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>管理员登录</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/admin_login.css" />
	</head>
	<body>
		<div class="container">
		<form action="admin_login.php" method="POST">
			<h2>Administrator</h2>
			<div class="input-group">
				<div class="input-group-addon">
					<div class="glyphicon glyphicon-user"></div>
				</div>
				<input type="text" maxlength="15" value="<?php echo $this->_tpl_vars['cookie_name']; ?>
" name="name" class="form-control"/>
			</div>
			<br />
			<div class="input-group">
				<div class="input-group-addon">
					<div class="glyphicon glyphicon-lock"></div>
				</div>
				<input type="password" maxlength="15" value="<?php echo $this->_tpl_vars['cookie_pwd']; ?>
" name="passwd" class="form-control"/>
			</div><br/>
			<div class="rem_pwd">
				<input type="checkbox" name="remember" value="remember"/>&nbsp;Remember me
			</div>
			<br /><br />
			<!-- <a href="admin.html" class="btn btn-default">Login in</a> -->
			<input type="submit" name="submit" class="btn btn-default" value="Login in">
			</form>
		</div>	
	</body>
</html>