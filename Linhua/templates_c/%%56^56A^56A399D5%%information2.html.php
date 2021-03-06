<?php /* Smarty version 2.6.25-dev, created on 2016-07-30 14:12:44
         compiled from information2.html */ ?>
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
					<a href="teacher.php?number=<?php echo $this->_tpl_vars['info']['number']; ?>
&name=<?php echo $this->_tpl_vars['info']['name']; ?>
"><span class="glyphicon glyphicon-home">&nbsp;主页</span></a>
				</li>
			</ul>
			
			<hr />
			
			<!--主体-->
			<div class="row">
				<!--显示头像-->
				<div class="col-md-3 left">
					<img src="image/27.jpg"/>
					<br />
					<h4><?php echo $this->_tpl_vars['info']['name']; ?>
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
							    <li>&nbsp;教&nbsp;师&nbsp;号&nbsp;：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['number']; ?>
</li>
								<br />
								<li>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['name']; ?>
</li>
								<br />
								<li>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['sex']; ?>
</li>
								<br />
								<li>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['education']; ?>
</li>
								<br />
								<li>毕业学校：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['school']; ?>
</li>
								<br />
								<li>所属科组：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['group']; ?>
</li>
								<br />
								<li>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：&nbsp;&nbsp;<?php echo $this->_tpl_vars['info']['email']; ?>
</li>
							</ul>
						</div>



						<!--第二个选项卡-->
						
						<div class="tab-pane slide in" id="two">
						<form action="./information2.php" method="POST">
							<div class="input-group">
								<div class="input-group-addon">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</div>
								<input type="text" name="name" class="form-control"/>
							</div>
							<br />
							<input type="hidden" name="number" value="<?php echo $this->_tpl_vars['info']['number']; ?>
">
							<div class="input-group">
								<div class="input-group-addon">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历</div>
								<input type="text" name="education" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">毕业学校</div>
								<input type="text" name="school" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">所属科组</div>
								<input type="text" name="group" class="form-control"/>
							</div>
							<br />
							<div class="input-group">
								<div class="input-group-addon">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</div>
								<input type="text"  name="email" class="form-control"/>
							</div>
							<br />
							<!-- <a href="#" class="btn btn-default form-control">确认修改</a> -->
							<input type='submit' name='submit' value='确认修改' class="btn btn-default form-control">
							</form>
						</div>


						
						<!--第三个选项卡-->

						<div class="tab-pane slide in" id="three">
						<form action="#" method="POST">
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
							<input type='submit' name='submit_pwd' value='确认修改' class="btn btn-default form-control">
							<!-- <a href="#" class="btn btn-default form-control">确认修改</a> -->
						</div>
						</form>
					</div>
				</div>
			</div>
			
			
		</div>
		
		<script src="bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	</body>
</html>