<?php /* Smarty version 2.6.25-dev, created on 2016-12-20 02:06:48
         compiled from admin.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>管理员界面</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/admin.css" />
		<script type="text/javascript" src="bootstrap-3.3.5-dist/js/feny.js"></script>
		<script type="text/javascript">
         function login(){
          $("#choose").submit() ;
         }
         function add(){
          $("#form2").submit() ;
         }
          function test(){
          	if(!confirm('确认删除吗？'))
          		return false;
          }
        </script>
	</head>
	<body>
		<hr />
		<div class="container">
		<div class="row">
			<div class="col-md-2">
				<h2>Admin</h2>
				<br />
				<small>
					<a href="main.php">查看网站</a>&nbsp;|
					<a href="admin_login.php">&nbsp;退出</a>
				</small>
			</div>
			<div class="col-md-10">
				<div class="main">
				<nav class="nav nav-pills">
					<div class="navbar-header">
						<a href="#" class="navbar-brand glyphicon glyphicon-star-empty"></a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#one" data-toggle = "tab">用户管理</a></li>
						<li><a href="#two" data-toggle = "tab">实验管理</a></li>
						<li><a href="#three" data-toggle = "tab">添加用户</a></li>
					</ul>
	                  <form class="navbar-form navbar-right" id="choose" method="GET" action="./admin.php">
						<div class="form-group search">
							<div class="form-group">
								<label><!-- <input type="text" value="搜索内容..." class="form-control"/> -->
								<input type="radio" name="choose" value="学生"  class="form-control" id="student"/>&nbsp;学生&nbsp;&nbsp;
								<input type="radio" name="choose" value="教师"  class="form-control" id="teacher"/>&nbsp;教师&nbsp;&nbsp;</label>
								 <a href="javascript:login()" class="btn btn-default">搜索</a> 
							</div>
						</div>
					</form>
				</nav>
				<hr />
				<div class="tab-content">
						<!--第一个选项卡：用户管理-->
						<div class="tab-pane slide in active" id="one">
							<table class="table table-bordered table-striped">
								<tr>
									<th>姓名</th>
									<th>身份</th>
									<th>性别</th>
									<th>学号/教师号</th>
									<th>密码</th>
									<th>学校/毕业学校</th>
									<th>院系/组别</th>
									<th>专业/学历</th>
									<th>邮箱</th>
									<th>操作</th>
								</tr>
								<?php $_from = $this->_tpl_vars['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
								<tr>
									<td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['indentity']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['sex']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['number']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['passwd']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['school']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['institute_group']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['major_education']; ?>
</td>
									<td><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
									<td>
										&nbsp;&nbsp;
										<a href="admin_modify.php?number=<?php echo $this->_tpl_vars['v']['number']; ?>
&indentity=<?php echo $this->_tpl_vars['v']['indentity']; ?>
" title="修改信息">
											<span class="glyphicon glyphicon-wrench" style="color: burlywood;"></span>
										</a>
										<a href="./admin.php?delete=true&number=<?php echo $this->_tpl_vars['v']['number']; ?>
&choose=<?php echo $this->_tpl_vars['v']['indentity']; ?>
" title="删除用户" onClick="return test();">
											<span class="glyphicon glyphicon-remove"></span>
										</a>
									</td>
								</tr>
								 <?php endforeach; endif; unset($_from); ?>
							</table>
							<!--翻页-->
							<ul class="pagination">
								<li><a href="admin.php?choose=<?php echo $this->_tpl_vars['v']['choose']; ?>
&page=1">首页</a></li>
								<li><a href="admin.php?choose=<?php echo $this->_tpl_vars['v']['choose']; ?>
&page=<?php echo $this->_tpl_vars['page']['prepg']; ?>
"><?php echo $this->_tpl_vars['page']['pre']; ?>
</a></li>
							    <li><a href="admin.php?choose=<?php echo $this->_tpl_vars['v']['choose']; ?>
&page=<?php echo $this->_tpl_vars['page']['nextpg']; ?>
"><?php echo $this->_tpl_vars['page']['next']; ?>
</a></li>  

								<li><a href="#">共<?php echo $this->_tpl_vars['page']['pagenum']; ?>
页</a></li>
								<li><a href="#">当前为第<?php echo $this->_tpl_vars['page']['page']; ?>
页</a></li>

							</ul>
						</div>
						
						<!--第二个选项卡：实验管理-->
						<div class="tab-pane slide in" id="two">
						<div id="result">

						<script>
						dopage('result','admin_ajax.php')
						</script>
							</div>
						</div>
						
						<!--第三个选项卡：添加用户-->
						<div class="tab-pane slide in" id="three">
							<div class="input-group" class="join_users">
							<form action="./admin.php" method="POST" id="form2">
								<div class="input-group">
									<div class="input-group-addon">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</div>
									<input type="text" name="name" width="200px" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">学/教师号</div>
									<input type="text" name="number" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</div>
									<input type="text" name="passwd" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</div>
									<input type="text" name="sex" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</div>
									<input type="text" name="email" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">院系/组别</div>
									<input type="text" name="institute" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">专业/学历</div>
									<input type="text" name="major" class="form-control"/>
								</div>
								<br />
								<div class="input-group">
									<div class="input-group-addon">(毕业)学校</div>
									<input type="text" name="school" class="form-control"/>
								</div>
								<br />
								
								
								<div class="input-group job">
									<input type="radio" name="add" value="学生" id="student"/>学生
									<input type="radio" name="add" value="教师" id="teacher"/>教师
								</div>
								<br />
								<div class="input-group">
								 <a href="javascript:add()" class="btn btn-default" id="submit">添加</a> 
								<!-- <input type="submit" name="add_submit" value="添加" class="btn btn-default" id="submit"> -->
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>	
		
		<script src="bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script src="bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	</body>
</html>