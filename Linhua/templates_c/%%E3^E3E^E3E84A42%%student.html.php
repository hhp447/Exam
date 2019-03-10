<?php /* Smarty version 2.6.25-dev, created on 2016-12-14 12:30:49
         compiled from student.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width,initial-scale=1"/>
		<title>学生平台</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="./another_css/student.css" />
		<script type="text/javascript" src="./bootstrap-3.3.5-dist/js/feny.js"></script>
		<script type="text/javascript" src="./bootstrap-3.3.5-dist/js/find.js"></script>
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
         function fi(){
       var id=document.getElementById("id").value;
       find('findd','student_ajax_find.php?id='+id+'&number=<?php echo $this->_tpl_vars['number']; ?>
')
   }
</script>
<script>
$(document).ready(function(){
$("#ok").click(function(){
			var a = $('input:radio[name="experiment"]:checked').val();
			var url='student_ajax.php?number=<?php echo $this->_tpl_vars['number']; ?>
&must='+a;
			dopage('result',url)
});

})
</script>
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li><a href="information.php?number=<?php echo $this->_tpl_vars['number']; ?>
"><span class="glyphicon glyphicon-user">个人信息</span></a></li>
				<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['number']; ?>
"><span class="glyphicon glyphicon glyphicon-fire">学习论坛</span></a></li>
				<li><a href="./main.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			
			<hr />
			
			<!--头像和昵称-->
			<div class="row row_one">
				<div class="col-md-6 left_area">
					<div class="info">
					<img src="./image/26.jpg" />     <!--显示个人头像-->
					<br />
					<h4><?php echo $this->_tpl_vars['name']; ?>
</h4>    <!--显示用户昵称-->
					</div>
				</div>
				<div class="col-md-6 right_area">
				
				</div>
			</div>
			
			<hr />
			<!--学生实验操作-->
			<ul class="nav nav-justified teacher_nav">
				<li class="active"><a href="#one" data-toggle = "tab">实验题目</a></li>
				<li><a href="#two" data-toggle = "tab">查询实验成绩</a></li>
			</ul>
			<hr />
			
			<!--选项卡内容-->	
			<div class="tab-content">
				
				<!--第一个选项卡：选做实验-->
				<div class="tab-pane slide in active" id="one">
					<div id="result1">

					<div class="select_ex">
						<input type="radio" name="experiment" value="1" />必做实验
						&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="experiment" value="0" />选做实验
						&nbsp;&nbsp;&nbsp;&nbsp;
						
						<button class="btn btn-default btn-sm" id="ok">确认</button>
					</div>
					<br /><br />
				

					<div id="result">
					<script>
					
					dopage('result','student_ajax.php?number=<?php echo $this->_tpl_vars['number']; ?>
')
					</script>
					</div>


					</div>
				</div>
				
				<!--第二个选项卡：查询实验成绩-->
				&nbsp;<div class="tab-pane slide in" id= "two">
				<form action="./student.php?name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
" method="POST" id="form1">
					<div class="input-group">
						<input type="text" class="form-control" name="id" id="id" placeholder="请输入实验序号"/>
						<div class="input-group-addon">
							<a href="javascript:fi()"><div class="glyphicon glyphicon-search"></div></a>
						</div>
					</div>
					</form>
					<br />
					<!--这里显示查询结果-->
					 <div id="findd"> 
					</div>
					</div>
					<hr />
				
			
			<!--底部部分-->
			<br />
			<ul class="breadcrumb">
				<li>Copyright&nbsp;@Linhua&nbsp;/&nbsp;123456789@qq.com</li>
			</ul>
	
		</div>
		
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	</body>
</html>