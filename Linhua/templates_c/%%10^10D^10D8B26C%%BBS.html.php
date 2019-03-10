<?php /* Smarty version 2.6.25-dev, created on 2016-12-20 09:52:56
         compiled from BBS.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>论坛</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./another_css/BBS.css" />
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/jquery-2.1.4.min.js"></script>
		<script>
			$(document).ready(function  () {
				$(".answer").click(function  () {
					$(this).parent().next().next().next().toggle(500);
				})
				$(".receive").click(function  () {
					$(this).next().next().next().toggle(500);
				})
			})
			
		</script>
	</head>
	<body>
		<nav id="heading" class="navbar-default navbar-fixed-top">
			<a href="<?php echo $this->_tpl_vars['information']['return']; ?>
">
				<span class="glyphicon glyphicon-home"></span>
			</a>
		</nav>
		<div id="main">
			<div class="main_left col-lg-3">
				<div class="info">
					<img class="img-circle img-responsive img-thumbnail" src="./image/16.jpg"/>
					<br /><br />
					<ul class="breadcrumb">
					
						<li><?php echo $this->_tpl_vars['information']['name']; ?>
</li>
						<li><?php echo $this->_tpl_vars['information']['sex']; ?>
</li>
						<li><?php echo $this->_tpl_vars['information']['school_ins']; ?>
</li>
						<li><?php echo $this->_tpl_vars['information']['education_maj']; ?>
</a></li>
					</ul>
					<strong>上次登录时间：</strong>
					<p><?php echo $this->_tpl_vars['last_login_time']; ?>
</p>
				</div>
				<hr />
			<!-- 	<a href="#" class="receive">
					<span class="glyphicon glyphicon-exclamation-sign"></span>
					收到回复
					*1
				</a> -->
				<br /><br />
				<div class="see_recevie">
					<strong>单身狗：</strong>指针就是那个什么什么~~
				</div>
				
				<hr />
				<hr />
				<form method="POST" action="./BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
">
				<h3><font color="#2894FF">我有疑问</font></h3>
				<textarea class="form-control" rows="4" cols="4" name="problem"></textarea>
				<br />
				<!-- <button class="btn btn-info form-control">提问</button> -->
				<input type="submit" name="submit" class="btn btn-info form-control" value='提交疑问'>
				</form>
			</div>
			<div class="main_right col-lg-9">
				<div class="right-top">
					<p class="title">学习论坛</p>
					<div class="col-lg-3 input-group">
						
						<!-- <input type="text" class="text-info form-control" placeholder="请输入搜索内容..."/> -->
						<!-- <div class="input-group-addon">
							<a href="#"><div class="glyphicon glyphicon-search"></div></a>
						</div> -->
					</div>
				</div>
				<div class="right_body">
					<table class="table table-hover table-responsive">




					<?php $_from = $this->_tpl_vars['question_comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['question_comment']):
?>
						<tr>
							<td>
								<p>
									<i><?php echo $this->_tpl_vars['question_comment']['id']; ?>
Floor</i><br /><br />
									<strong><?php echo $this->_tpl_vars['question_comment']['send_name']; ?>
：</strong>
									<?php echo $this->_tpl_vars['question_comment']['problem_']; ?>

									&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo $this->_tpl_vars['question_comment']['send_time']; ?>
</small>
								</p>

								<?php $_from = $this->_tpl_vars['question_comment']['comment_']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comm']):
?>
								<p class="answer_info">
									<?php echo $this->_tpl_vars['comm']['answer_answer']; ?>

									<strong>----BY <?php echo $this->_tpl_vars['comm']['answer_name']; ?>
</strong>
									&nbsp;&nbsp;&nbsp;&nbsp;<small><?php echo $this->_tpl_vars['comm']['answer_time']; ?>
</small>
								</p>
								<br/><br/>

								<?php endforeach; endif; unset($_from); ?>


								<br /><br />
								
								<a href="#"><i class="answer">回复&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
								<br /><br />


			<div class="answer_container">
			<form method = 'POST' action='BBS.php?question_id=<?php echo $this->_tpl_vars['question_comment']['id']; ?>
&number=<?php echo $this->_tpl_vars['information']['number']; ?>
'>
					<textarea class="form-control" name='comment_content' rows="3" cols="4"></textarea>
					<!-- <button class="btn btn-info form-control">确定</button> -->
					<input type='submit' name='com' value= '确定' class="btn btn-info form-control">
			</form>
			</div> 
							</td>

						</tr>
						<?php endforeach; endif; unset($_from); ?>




					</table>
					
					<ul class="pagination">

					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=1">首页</a></li>
					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
&next=0">上一页</a></li>
					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=1">1</a></li>
					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=2">2</a></li>
					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=3">3</a></li>
					<li><a href="BBS.php?number=<?php echo $this->_tpl_vars['information']['number']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
&next=1">下一页</a></li>
					
					</ul>
					
				</div>

			</div>
		</div> 
		<div class="foot">
			<ul class="breadcrumb">
				<li>Copyright&nbsp;@Linhua&nbsp;/&nbsp;123456789@qq.com</li>
			</ul>
		</div>
	</body>
</html>