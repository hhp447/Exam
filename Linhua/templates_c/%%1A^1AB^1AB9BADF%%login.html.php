<?php /* Smarty version 2.6.25-dev, created on 2016-07-30 07:49:16
         compiled from login.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width,initial-scale=1"/>
		<title>请登录您的信息</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/login.css" />
		<script>
			function login(){
				//判断单选框身份跳转到不同页面
				var stu,tea;
				stu=document.getElementById("student");
				tea=document.getElementById("teacher");
				btn=document.getElementById("ID_login");
				if(stu.checked){
					btn.href="student.html";
				}
				else if(tea.checked){
					btn.href="teacher.html";
				}
				else{
					alert("请选择登录身份！！");
				}
			}
		</script>
	</head>
	<body>
		<section id="container">			
			<div id="Filter">  <!--滤镜-->
				<div class="row">   
					
					<div class="col-md-4"></div>   
					
					<div class="col-md-4 login">
						<h3>请登录您的信息</h3>
						<form action="./login.php" method="post">
							<label>用户名：</label>					
							<div class="input-group">
								<div class="input-group-addon">
									<div class="glyphicon glyphicon-user"></div>
								</div>
								<input type="text" value="<?php echo $this->_tpl_vars['cookie_name']; ?>
" maxlength="15" name="name" id="name" class="form-control"/>								
							</div>
							<label>密码：</label>
							<div class="input-group">
								<div class="input-group-addon">
									<div class="glyphicon glyphicon-lock"></div>
								</div>
								<input type="password" value="<?php echo $this->_tpl_vars['cookie_pwd']; ?>
" maxlength="19" name="pwd" id="pwd" class="form-control"/>
							</div>
							<div class="checkbox">
								<div class="radio">
									<label><input type="radio" name="ID" id="student" value="student"/>学生</label>
									<label><input type="radio" name="ID" id="teacher" value="teacher"/>教师</label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label><input type="checkbox" name="remember" value="remember" class="rem_pwd"/>记住密码</label>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<div class="form-group submit">
										<!-- <a href="#" id="ID_login" class="btn btn-default form-control" onclick="login()">登录</a> -->
										<input type='submit' id="ID_login" class="btn btn-default form-control" name='submit' value="登录">								
									</div>
								</div>
							</div>
		
						<!-- 	<a href="#" class="forget_pwd">忘记密码</a> -->
							<br />
							<br />
						</form>
					</div>
					
					<div class="col-md-4"></div>
					
				</div>
			</div>
		</section>
	</body>
</html>