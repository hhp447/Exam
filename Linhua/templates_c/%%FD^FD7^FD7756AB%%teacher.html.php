<?php /* Smarty version 2.6.25-dev, created on 2016-12-20 06:03:57
         compiled from teacher.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width,initial-scale=1"/>
		<title>教师平台</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="./another_css/teacher.css" />
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="./bootstrap-3.3.5-dist/js/feny.js"></script>
		<script type="text/javascript">
         function find(){
         	var id=document.getElementById("xxx").value;
           dopage('result','ajax.php?id='+id+'&find=true&name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
')
         }
		</script>
		<script>
			$(document).ready(function  () {
				$(".look_pick_questions").click(function  () {
					$(this).next().next().next().toggle(400);
				});
				
				$.post("timu.php",{name:"uuu"},function(data){
					document.getElementById("xuanze").innerHTML=data.xuanze;
					document.getElementById("tiankong").innerHTML=data.tiankong;
					document.getElementById("chengxu").innerHTML=data.chengxu;
					document.getElementById("biancheng").innerHTML=data.biancheng;

				});

			$("#ok_1").click(function(){
					var a =  $("input[name='xuanze']:checked").length;
					document.getElementById("xuan_num").innerHTML=a;
					$("#show_questions").click()=true;
				});
			$("#ok_2").click(function(){
					var a =  $("input[name='tiankong']:checked").length;
					document.getElementById("tian_num").innerHTML=a;
					$("#look_2").click()=true;
				});
			$("#ok_3").click(function(){
					var a =  $("input[name='chengxu']:checked").length;
					document.getElementById("cheng_num").innerHTML=a;
					$("#look_3").click()=true;
				});
			$("#ok_4").click(function(){
					var a =  $("input[name='biancheng']:checked").length;
					document.getElementById("bian_num").innerHTML=a;
					$("#look_4").click()=true;
				});
			$("#ok_5").click(function(){
				var arr = [];
				$('input[name="xuanze"]:checked').each(function(){
				arr.push($(this).val());
				})
				$('input[name="tiankong"]:checked').each(function(){
				arr.push($(this).val());
				})
				$('input[name="chengxu"]:checked').each(function(){
				arr.push($(this).val());
				})
				$('input[name="biancheng"]:checked').each(function(){
				arr.push($(this).val());
				})
				var ex_name = $("#ex_name").val();
				var ex_yaoqiu = $("#ex_yaoqiu").val();
				var must = $('input:radio[name="exam_type"]:checked').val();
				var num_xuan = $("#num_xuan").val();
				var num_tian = $("#num_tian").val();
				var num_cheng = $("#num_cheng").val();
				var num_bian = $("#num_bian").val();
				$.post("fabu_ex.php",{nam:arr,ex_name:ex_name,must:must,ex_yaoqiu:ex_yaoqiu,num_xuan:num_xuan,num_tian:num_tian,num_cheng:num_cheng,num_bian:num_bian,author:"<?php echo $this->_tpl_vars['name']; ?>
"},function(data){alert(data);});
			});

})
</script>
		<script type="text/javascript">
         function find(){
         	var id=document.getElementById("xxx").value;
           dopage('result','ajax.php?id='+id+'&find=true&name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
')
         }
</script>
	</head>
	<body>
		<div class="container">
			<!--顶部导航栏-->
			<ul class="nav nav-pills top_nav">
				<li><a href="information2.php?number=<?php echo $this->_tpl_vars['number']; ?>
"><span class="glyphicon glyphicon-user">个人信息</span></a></li>
				<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['number']; ?>
"><span class="glyphicon glyphicon glyphicon-fire">学习论坛</span></a></li>
				<li><a href="#>"><span class="glyphicon glyphicon glyphicon glyphicon-book">发布资料</span></a></li>
				<li><a href="./main.php"><span class="glyphicon glyphicon-off">退出</span></a></li>
			</ul>
			
			<hr />
			
			<!--头像和昵称-->
			<div class="row row_one">
				<div class="col-md-6 left_area">
					<div class="info">
					<img src="./image/27.jpg" />     <!--显示个人头像-->
					<br />
					<h4><?php echo $this->_tpl_vars['name']; ?>
</h4>    <!--显示用户昵称-->
					</div>
				</div>
				<div class="col-md-6 right_area">
				
				</div>
			</div>
			
			<hr />
			
			<!--教师实验操作-->
			<ul class="nav nav-justified teacher_nav">
				<li class="active"><a href="#one" data-toggle = "tab">发布实验</a></li>
				<li><a href="#two" data-toggle = "tab">批改实验</a></li>
			</ul>
			
			<!--选项卡内容-->	
			<div class="tab-content">
				
				<!--第一个选项卡：发布实验-->
			<!-- 	<form method="POST" action=""> -->
				<div class="tab-pane slide in active" id="one">
					<hr />
					<div class="content_select">
						<br />
						<div class="content_select_container">
						<!-- ./teacher.php?name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
 -->
								<!-- <form method="POST" action="./axx.php"> -->
								<input type="text" class="form-control" name="ex_name" id="ex_name" placeholder='实验名称' />
								<hr />
								<input type="text" class="form-control" name="ex_yaoqiu" id="ex_yaoqiu" placeholder='实验要求' />
								<hr />
							
								<hr /> 
								必做 &nbsp;<input type="radio" name="exam_type" value="1" />
								&nbsp;&nbsp;
								选做 &nbsp;<input type="radio" name="exam_type" value="0"/>
								<hr />








								
								选&nbsp;&nbsp;&nbsp;择&nbsp;&nbsp;&nbsp;题&nbsp;&nbsp;(&nbsp;&nbsp;每题5分&nbsp;&nbsp;)：共&nbsp;<input type="text" id="num_xuan" class="number"/>&nbsp;&nbsp;题,
								<!-- 每题&nbsp;<input type="text" value="0" class="number"/>&nbsp;分 -->
								已选题数：<span style="color: skyblue;" id="xuan_num">0 </span>题
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="look_pick_questions" id="show_questions">看题</a>
								<br /><hr />
								<tr>
			
								<div class="questions_contents">
								
									<div style="height:300px; overflow:scroll;" id="xuanze">

									</div>
									<!-- <button class="btn form-control" id="ok_1"><strong>确定</strong></button> -->
									<input type="button" value="确定" class="btn form-control" id="ok_1">
									<hr />
								</div>
						
							<br />








						
								填&nbsp;&nbsp;&nbsp;空&nbsp;&nbsp;&nbsp;题&nbsp;&nbsp;(&nbsp;&nbsp;每题5分&nbsp;&nbsp;)：共&nbsp;<input type="text" id="num_tian" class="number"/>&nbsp;题,
								<!-- 每题&nbsp;<input type="text" value="0" class="number"/>&nbsp;分 -->
								已选题数：<span style="color: skyblue;" id="tian_num">0 </span>题
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="btn look_pick_questions" id="look_2">看题</a>
								<br /><hr />
								
								<div class="questions_contents">
									
									<div style="height:300px; overflow:scroll;" id="tiankong">
									
									</div>
									<input type="button" value="确定" class="btn form-control" id="ok_2">
									<hr />
								</div>
					
							<br />









							
								程序结果题&nbsp;&nbsp;(每题10分)：
								共&nbsp;<input type="text" id="num_cheng" class="number"/>&nbsp;题,
								<!-- 每题&nbsp;<input type="text" value="0" class="number"/>&nbsp;分 -->
								已选题数：<span style="color: skyblue;" id="cheng_num">0 </span>题
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="btn look_pick_questions" id="look_3">看题</a>
								<br /><hr />
								
								<div class="questions_contents">
									<div style="height:300px; overflow:scroll;" id="chengxu">
									
									</div>
									<input type="button" value="确定" class="btn form-control" id="ok_3">
									<hr />
								</div>
						
							<br />








							
								编&nbsp;&nbsp;&nbsp;程&nbsp;&nbsp;&nbsp;题&nbsp;&nbsp;(每题20分)：
								共&nbsp;<input type="text" id="num_bian" class="number"/>&nbsp;题,
								<!-- 每题&nbsp;<input type="text" value="0" class="number"/>&nbsp;分 -->
								已选题数：<span style="color: skyblue;" id="bian_num">0 </span>题
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="btn look_pick_questions" id="look_4">看题</a>
								<br /><hr />
								
								<div class="questions_contents">
									
									<div style="height:300px; overflow:scroll;" id="biancheng">
							
									</div>
									<input type="button" value="确定" class="btn form-control" id="ok_4">
									<hr />
								</div>
					
							<br />
							<!-- <button class="form-control">确定</button> -->
							<input type="submit" name="input" value="确定" class=" form-control" id="ok_5">
							
							<br />
							</form>
						</div>
					</div>
				</div>













				<!--第二个选项卡：批改实验-->
				<div class="tab-pane slide in" id="two">
					<hr />
					<!--搜索实验号-->
					<div class="searching">
						<div class="input-group">
							<input type="text" id="xxx" class="text-info form-control" placeholder="请输入实验序号"/>
							<div class="input-group-addon">
								
								<a href="javascript:find()" class="glyphicon glyphicon-search"></a> 
								</div>
						</div>
					</div>	
					<br /><br />
					<div id="result">
					
						
						 <script>
                            dopage('result', 'ajax.php?name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
')
                         </script>

					
					</div>
				
						
					<!--实验序号-->
					<div class="row" id="result">
						 <!--<script>
                            //dopage('result', 'ajax.php?name=<?php echo $this->_tpl_vars['name']; ?>
&number=<?php echo $this->_tpl_vars['number']; ?>
')
                         </script>-->
                         <table class="table table-bordered"></table>
					</div>
					<br />
				</div>
				<br />
			
			<!--底部部分-->
			<ul class="breadcrumb">
				<li>Copyright&nbsp;@Linhua&nbsp;/&nbsp;123456789@qq.com</li>
			</ul>
	
		</div>
		
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.js"></script>
	</body>
</html>