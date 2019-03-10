<?php

include "./include.php";

date_default_timezone_set('PRC');//设置为中国时间

$id=$_GET['id'];//获取实验ID

$number=$_GET['number'];//获取学生学号

$sql="SELECT * from ex_table where id='$id'";//查询此实验的所有信息

$res=mysqli_query($con,$sql);//执行

$row=mysqli_fetch_array($res);

$name=$row['ex_name'];//获得实验名称

$content=$row['ex_content'];//获得实验内容

$request=$row['ex_request'];//获得实验要求

$time=date('Y-m-d H:i',$row['time']);//获得发布时间

$stu_sql="SELECT * from stu_information where number='$number'";//用学号查询该学生的姓名

$stu_row=mysqli_fetch_array(mysqli_query($con,$stu_sql));

$stu_name=$stu_row['name'];//获取学生姓名

$new_array=compact('id','name','content','request','stu_name','number','time');//将所有内容压缩成一个数组

/**
**
**提交代码部分
**
*/
if(isset($_POST['submit'])){

	$code=$_POST['code'];//获取代码

	$code_sql="INSERT INTO grade set code='$code',id='$id',number='$number'";

	$result=mysqli_query($con,$code_sql);

	if($result){

		echo "<script>alert('提交成功，等待教师批改！');parent.location.href='./student1.php?id=$id&number=$number';</script>";

	}else{
        //换为更新语句，防止重复提交
		$code_sql="UPDATE grade set code='$code' WHERE id='$id'AND number='$number'";

	    $result=mysqli_query($con,$code_sql);

	    if($result){

		echo "<script>alert('提交成功，等待教师批改！');parent.location.href='./student1.php?id=$id&number=$number';</script>";

	}else{

		echo "<script>alert('提交失败！')</script>";

	}
	}
}

$smarty->assign('con',$new_array);//分配给模板页面

$smarty->display('student1.html');
?>