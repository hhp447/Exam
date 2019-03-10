<?php
include "./include.php";

include "./config.php";//获取上次登录的时间

if(isset($_GET['number'])){//合法进入此页面




	/**
	***
	***@获取左边个人信息数据
	***
	**/
	$number = $_GET['number'];

	if (strlen($number)<=10) {    //教师号字符串小于11个
	 	
	 	$sql="SELECT * FROM tea_information where number = $number";

	 	$res=mysqli_query($con,$sql);

	 	while ($row=mysqli_fetch_array($res)) {
	 		
	 		$name="姓名：".$row['name'];

	 		$sex="性别：".$row['sex'];

	 		$school_ins="毕业学校：".$row['school'];

	 		$education_maj = "学历：".$row['education'];

	 		$realname=$row['name'];

	 		$return = "teacher.php?number=$number&name=$realname";//返回主页的链接

	 		

	 	}

	 }else{     //学号字符串大于等于11

	 	$sql="SELECT * FROM stu_information where number = $number";

	 	$res=mysqli_query($con,$sql);

	 	while ($row=mysqli_fetch_array($res)) {
	 		
	 		$name="姓名：".$row['name'];

	 		$realname=$row['name'];

	 		$sex="性别：".$row['sex'];

	 		$school_ins="学院：".$row['institute'];

	 		$education_maj = "专业：".$row['major'];

	 		$return = "student.php?number=$number&name=$realname";//返回主页的链接

	 		

	 	}
	 }








	/**
	***
	***@获取论坛问题评论那边页面数据
	***
	**/


	

	$num = 5;//每页显示两条数据

	$result_ = mysqli_query($con,"SELECT * FROM question");//总记录条数

	$all = mysqli_num_rows($result_);

	$max = ceil($all/$num);//获取总页数，也是最后一页

	if(isset($_GET['next'])){

		$page = $_GET['next'] == 0?$_GET['page']-1:$_GET['page']+1;

	}else{

		$page = isset($_GET['page'])?$_GET['page']:1;
	}

	$page=$page<1?1:$page;

	$page=$page>$max?$max:$page;

	$offset = ($page-1)*$num;//获取查询起始索引

	$question_comment = getcomment_answer($offset,$num,$con);//显示问题评论函数，在config.php里面

	















	/**
	***
	***@提交疑问按钮
	***
	**/

	 if (isset($_POST['submit'])) {            
	 	
	 	$problem = $_POST['problem'];

	 	$time=time();

	 	$ques_sql = "INSERT INTO question(name,problem,time) values('$realname','$problem','$time')";

	 	$result = mysqli_query($con,$ques_sql);

	 	if($result){

	 		echo "<script>alert('发布成功！');parent.location.href='BBS.php?number=$number';</script>";

	 	}else{

	 		echo "<script>alert('发布失败！');parent.location.href='BBS.php?number=$number';</script>";

	 	}
	 }






	/**
	***
	***@提交评论按钮
	***
	**/
	if(isset($_POST['com'])){

		$comment_content = $_POST['comment_content'];

		$question_id = $_GET['question_id'];

		$comment_time = time();

		$comment_sql = "INSERT into comment(question_id,number,answer,time) values('$question_id','$number','$comment_content','$comment_time') ";

		$comment_res = mysqli_query($con,$comment_sql);

		if($comment_res){

			echo "<script>alert('评论成功！');parent.location.href='BBS.php?number=$number';</script>";
		}else{

			echo "<script>alert('评论失败！');parent.location.href='BBS.php?number=$number';</script>";
		}
	}







	$information = compact("number","name","sex","school_ins","education_maj","return");

	$last_login_time=last_login_time();//获取上次登录的时间

	$smarty->assign("last_login_time",$last_login_time);//分配给模板

	@$smarty->assign("information",$information);

	$smarty->assign('question_comment',$question_comment);

	$smarty->assign('page',$page);//将当前页数告诉模板页面，用于上一页下一页

	$smarty->display("BBS.html");

}else{

	echo "404 not found ";

}


?>