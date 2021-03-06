<?php /* Smarty version 2.6.25-dev, created on 2016-07-30 14:11:45
         compiled from information.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>个人信息</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/information.css" />
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li>
					<a href="student.php?number=<?php echo $this->_tpl_vars['content']['number']; ?>
&name=<?php echo $this->_tpl_vars['content']['name']; ?>
"><span class="glyphicon glyphicon-home">&nbsp;主页</span></a>
				</li>
			</ul>
			
			<hr />
			
			<!--主体-->
			<div class="row">
				<!--显示头像-->
				<div class="col-md-3 left">
					<img src="image/26.jpg"/>
					<br />
					<h4><?php echo $this->_tpl_vars['content']['name']; ?>
</h4>  
				</div>
				<!--个人信息-->
				<div class="col-md-9 right">
					<ul class="nav nav-justified">
						<li class="active"><a href="#one" data-toggle = "tab">个人信息</a></li>
						<li><a href="#two" data-toggle = "tab">修改信息</a></li>
						<li><a href="#three" data-toggle = "tab">修改密码</a></li>
					</ul>
					<!--选项卡内容-->
					<div class="tab-content">
						<!--第一个选项卡-->
						<div class="tab-pane slide in active" id="one">
							<ul>
								<li>姓名：<?php echo $this->_tpl_vars['content']['name']; ?>
</li>
								<br />
								<li>学号：<?php echo $this->_tpl_vars['content']['number']; ?>
</li>
								<br />
								<li>学校：<?php echo $this->_tpl_vars['content']['school']; ?>
</li>
								<br />
								<li>院系：<?php echo $this->_tpl_vars['content']['institute']; ?>
</li>
								<br />
								<li>专业：<?php echo $this->_tpl_vars['content']['major']; ?>
</li>
								<br />
								<li>邮箱：<?php echo $this->_tpl_vars['content']['email']; ?>
</li>
							</ul>
						</div>


						<!--第二个选项卡-->
						<div class="tab-pane slide in" id="two">
						<form action="./information.php?number=<?php echo $this->_tpl_vars['content']['number']; ?>
" method="post">
							<div class="input-group">
								<div class="input-group-addon">姓名</div>
								<input type="text" name="name" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">学校</div>
								<input type="text" name="school" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">院系</div>
								<input type="text" name="institute" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">专业</div>
								<input type="text" name="major" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">邮箱</div>
								<input type="text" name="email" class="form-control"/>
							</div>
							<br />
							<!-- <a href="#" class="btn btn-default form-control">确认修改</a> -->
							<input type="submit" name="submit" class="btn btn-default form-control" value="确认修改">
							</form>
						</div>


						<!--第三个选项卡-->
						<div class="tab-pane slide in" id="three">
						<form action="./information.php?number=<?php echo $this->_tpl_vars['content']['number']; ?>
" method="post">
							<br />
							<div class="input-group">
								<div class="input-group-addon">旧密码</div>
								<input type="password" name="old_pwd" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">新密码</div>
								<input type="password" name="new_pwd1" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">确认密码</div>
								<input type="password" name="new_pwd2" class="form-control"/>
							</div>
							<br />
							<!-- <a href="#" class="btn btn-default form-control">确认修改</a> -->
							<input type="submit" name="submit_pwd" value="确认修改" class="btn btn-default form-control">
							</form>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		
		<script src="bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	</body>
</html>