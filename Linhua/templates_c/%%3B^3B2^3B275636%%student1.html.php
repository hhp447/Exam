<?php /* Smarty version 2.6.25-dev, created on 2016-11-27 14:56:25
         compiled from student1.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>学生实验</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="another_css/student1.css"/>
		<meta charset="utf-8" />
	<link rel="stylesheet" href="../../kindeditor-4.1.7/themes/default/default.css" />
	<link rel="stylesheet" href="../../kindeditor-4.1.7/plugins/code/prettify.css" />
	<script charset="utf-8" src="../../kindeditor-4.1.7/kindeditor.js"></script>
	<script charset="utf-8" src="../../kindeditor-4.1.7/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../../kindeditor-4.1.7/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="code"]', {
				cssPath : '../../kindeditor-4.1.7/plugins/code/prettify.css',
				uploadJson : '../../kindeditor-4.1.7/php/upload_json.php',
				fileManagerJson : '../../kindeditor-4.1.7/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li>
					<a href="student.php?name=<?php echo $this->_tpl_vars['con']['stu_name']; ?>
&number=<?php echo $this->_tpl_vars['con']['number']; ?>
"><span class="glyphicon glyphicon-home">主页</span></a>
				</li>
				<li><a href="./main.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			<hr />
			<!--实验内容及要求-->
			<div class="jumbotron">
				<h4>实验<?php echo $this->_tpl_vars['con']['id']; ?>
：<?php echo $this->_tpl_vars['con']['name']; ?>
</h4>
				<br />
				<h5>
					实验内容：<?php echo $this->_tpl_vars['con']['content']; ?>

					<br /><br />
					实验要求：<?php echo $this->_tpl_vars['con']['request']; ?>

					<br /><br />
					发布时间：<?php echo $this->_tpl_vars['con']['time']; ?>

				</h5>
			</div>
			<hr />


			<!--学生提交代码区域-->

			<form name="example" action="./student1.php?id=<?php echo $this->_tpl_vars['con']['id']; ?>
&number=<?php echo $this->_tpl_vars['con']['number']; ?>
" method="POST">


			<!-- <textarea rows="10" cols="100%" name="code" class="form-control">请输入您的代码...（可进行多次提交，以最后一次提交为准）</textarea>
			<br />
			<div class="sumit">
				<!-- <a href="#" class="btn btn-default">提交</a>	 -->	
				<!--	<input type="submit" class="btn btn-default" name="submit" value="提交">
			</div> -->




			<textarea rows="10" cols="100%" name="code" class="form-control" style="/*width:700px;height:200px;*/visibility:hidden;"></textarea>
		<br />
		<div class="sumit">
		<input type="submit" name="submit" class="btn btn-default" value="提交" /> 
		</div>


			</form>
			<!--底部部分-->
			<ul class="breadcrumb">
				<li>Designed By ****</li>
				<li>@****.com</li>
			</ul>
		</div>
	</body>
</html>