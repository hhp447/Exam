<?php
include "./include.php";

$number=$_GET['number'];//接收传递来的学号或者教师号

$indentity=$_GET['indentity'];//接收身份（学生或者教师）

if(isset($_POST['submit'])){   //点击了修改资料按钮

	$up_name=$_POST['up_name'];//获取新的姓名

	$up_passwd=$_POST['up_passwd'];//获取新的密码

	$up_school=$_POST['up_school'];//获取新的学校

	$up_email=$_POST['up_email'];//获取新的邮箱

	$sex=$_POST['sex'];//获取性别

	$up_ma_ed=$_POST['up_ma_ed'];//获取新的专业或学历

	/*echo $up_name."<br/>".$up_passwd."<br/>".$up_school."<br/>".$up_email."<br/>".$up_in_gr."<br/>".$up_ma_ed;
	die;*/

	if($indentity=='学生'){    //修改学生信息

		$up_sql="UPDATE stu_information set name='$up_name',password='$up_passwd',school='$up_school',email='$up_email',sex='$sex',major='$up_ma_ed' where number='$number'";

	}else{   //修改教师信息

		$up_sql="UPDATE tea_information set name='$up_name',password='$up_passwd',school='$up_school',email='$up_email',education='$up_ma_ed',sex='$sex' where number='$number'";

	}

	$res=mysqli_query($con,$up_sql);//执行

	if($res){

		echo "<script>alert('修改成功！');parent.location.href='./admin_modify.php?number=$number&indentity=$indentity';</script>";//跳转到原来页面，传递参数，更新数据

	}else{

		echo "<script>alert('修改失败！');</script>";

	}
}







/**
**
**分配数据给模板，显示页面
***
*/
if($indentity=='学生'){//显示的是学生数据

	$sql="SELECT * from stu_information where number='$number'";

}else{//显示的是教师数据

	$sql="SELECT * from tea_information where number='$number'";

}

$row=mysqli_fetch_array(mysqli_query($con,$sql));

    $number=$row['number'];//获取该教师或学生的学号

    $passwd=$row['password'];//获取该教师或学生的密码

    $name=$row['name'];//获取该教师或学生的姓名

    $email=$row['email'];//获取该教师或学生的邮箱

    $school=$row['school'];//获取该教师或学生的学校

    $sex=$row['sex'];//获取该教师或者学生的性别

    if(isset($row['major'])){//如果是学生

	    $major_education=$row['major'];


	    $con=compact('number','passwd','name','email','major_education','sex','school','indentity');

    }else{//如果是教师

	    $major_education=$row['education'];


	    $con=compact('number','passwd','name','email','major_education','sex','school','indentity');

    }




$smarty->assign('content',$con);//分配数据给模板

$smarty->display('admin_modify.html');


?>