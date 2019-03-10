<?php
include "./include.php";
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');


function last_login_time(){//获取上次登录时间

	$name='last_login_time';

    $value=date('Y年m月d日H时i分s秒');

    if(isset($_COOKIE[$name])){

    	$time = $_COOKIE[$name];

    	setcookie($name,$value,time()+3600*24*365);//设置cookie保存时间为一年

		return $time;

	}else{

		setcookie($name,$value,time()+3600*24*365);//设置cookie保存时间为一年

		return '欢迎你第一次登录';

		}
}

function getcomment_answer($a,$b,$c){//获取论坛那边数据  分页

	$con = $c;

	$question_comment=array();

	$comment_ = array();

	$sql_question = "SELECT * FROM question limit $a,$b";

	$query = mysqli_query($con,$sql_question);

	while($roww = mysqli_fetch_array($query)){

		$id = $roww['id'];//问题ID

		$send_name = $roww['name'];//提问题的名字

		$problem_ = $roww['problem'];//问题

		$send_time = date("Y-m-d",$roww['time']);//提问时间

		$answer = "SELECT * FROM comment where question_id = '$id'";

		$answer_query = mysqli_query($con,$answer);

		while($answer_row = mysqli_fetch_array($answer_query)){

			$answer_number = $answer_row['number'];//获取评论人的学号/教师号

			$answer_answer = $answer_row['answer'];//获取评论人的回答

			$answer_time = date("Y-m-d",$answer_row['time']);//获取评论人的评论时间

			if(strlen($answer_number)<=10){

			$answer_name_sql = "SELECT name from tea_information where number = '$answer_number'";

			}else{

			$answer_name_sql = "SELECT name from stu_information where number = '$answer_number'";
			
			}

			$answer_res = mysqli_query($con,$answer_name_sql);

			$answer_ = mysqli_fetch_array($answer_res);

			$answer_name = $answer_['name'];//获取评论人的名字

			$array_comment=compact("answer_answer","answer_time","answer_name");

			array_push($comment_,$array_comment);

			/*$array_=compact("id","send_name","problem_","send_time","answer_answer","answer_time","answer_name");*/
			

			
		}


		$array_=compact("id","send_name","problem_","send_time","comment_");

		array_push($question_comment, $array_);//将所有问题与回答压进一个数组，再分配给模板显示

		$comment_ = array();

	}

	return $question_comment;
}



function getType_id($con,$a){

	$con=$con;

	$sql = "SELECT type_id from tiku where id='$a'";

	$res = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($res)){
		$type_id = $row['type_id'];
	}
	return $type_id;
}

function getExam($con,$id){//根据ID获取本实验试题，返回一个数组
	$con = $con;

	$exam = array();$xuan = array();$tian = array();$cheng = array();$bian = array();

	$sql="SELECT * from ex where id='$id'";

	$res = mysqli_query($con,$sql);

	$row=mysqli_fetch_array($res);

	$ex_name = $row['ex_name'];

	$sql_="SELECT * from ex_timu where ex_id='$id' and type_id = '1'";//选择题

	$res_ = mysqli_query($con,$sql_);


	while($row_ = mysqli_fetch_array($res_)){

	array_push($xuan,$row_['timu_id']);

	}
	$sql_="SELECT * from ex_timu where ex_id='$id' and type_id = '2'";//填空题

	$res_ = mysqli_query($con,$sql_);


	while($row_ = mysqli_fetch_array($res_)){

	array_push($tian,$row_['timu_id']);

	}
	$sql_="SELECT * from ex_timu where ex_id='$id' and type_id = '3'";//程序运行题

	$res_ = mysqli_query($con,$sql_);


	while($row_ = mysqli_fetch_array($res_)){

	array_push($cheng,$row_['timu_id']);

	}
	$sql_="SELECT * from ex_timu where ex_id='$id' and type_id = '4'";//编程题

	$res_ = mysqli_query($con,$sql_);


	while($row_ = mysqli_fetch_array($res_)){

	array_push($bian,$row_['timu_id']);

	}
	$arr = compact("xuan","tian","cheng","bian");

	return $arr;
}

?>