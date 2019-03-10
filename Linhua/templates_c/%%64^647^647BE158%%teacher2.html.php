<?php /* Smarty version 2.6.25-dev, created on 2016-12-19 05:17:20
         compiled from teacher2.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="name" content="width=device-width,initial-scale=1"/>
		<title>查看提交实验内容</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/teacher2.css" />
		<script type="text/javascript">
			function xiugai () {
				var xg=document.getElementById("modify");
				modify.hidden=false;
				var btn=document.getElementById("btn");
				btn.style.display="inline";
				var grace=document.getElementById("grace");
				grace.style.display="inline";
			}
		</script>
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li>
					<a href="teacher.php?name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
"><span class="glyphicon glyphicon-home">主页</span></a>
				</li>
				<li><a href="./main.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			<hr />
			<!--学生提交实验内容-->
			<div class="jumbotron">
				<p>
					<a href="#" onclick="xiugai()" title="修改和批注"><span class="glyphicon glyphicon-pencil"></span></a>			
					<!-- <a href="teacher.html"><span class="glyphicon glyphicon-ok right"></span></a> -->			
					
				</p>
				<!--这里显示学生提交的代码块-->
				
				<div width="300">
					<?php $_from = $this->_tpl_vars['ques_code']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['question'] => $this->_tpl_vars['code']):
?>	
					<code><?php echo $this->_tpl_vars['question']; ?>

					</code>
					<br/><?php echo $this->_tpl_vars['code']; ?>
<br/>
					<?php endforeach; endif; unset($_from); ?>
					</div>		
				<hr />
				<form action="./teacher2.php?id=<?php echo $this->_tpl_vars['id']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
&name=<?php echo $this->_tpl_vars['name']; ?>
&number2=<?php echo $this->_tpl_vars['number2']; ?>
" method="POST">
				<textarea id="modify" cols="100%" rows="10" hidden="hidden" name="opinion">批注或意见...</textarea>
				<hr/>
				<!-- <select id="grace" style="display: none;" name="select">
					<option>优</option>
					<option>良</option>
					<option>中</option>
					<option>及格</option>
					<option>不及格</option>
				</select> -->
				<input type="text" name="select" id="grace" style="display: none;" placeholder="输入您的总分数">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="hidden" name="teacher" value='<?php echo $this->_tpl_vars['name']; ?>
' >
				<input type="submit" name="submit" value="确认提交" id="btn" style="display: none;">
				</form>
			</div>
			
		</div>
	</body>
</html>