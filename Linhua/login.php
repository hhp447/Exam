<?php
include './include.php';

if(isset($_POST['submit'])){

	$number=$_POST['name'];//获取表单用户名

	$pwd=$_POST['pwd'];//获取表单密码

	$type=isset($_POST['ID'])?$_POST['ID']:null;//获取表单登录状态
	
	if($number==null || $pwd==null || $type==null){

		echo "<script>alert('登录失败，请检查账号，密码或者登录状态是否为空！');</script>";
	}
	if($type=="student"){//学生登录

		if(isset($_POST['remember'])){//是否记住密码

			setcookie('cookie_name',$number,time()*3600*24);//记住账号一天

            setcookie('cookie_pwd',$pwd,time()*3600*24);//记住密码一天


		}else{

			setcookie('cookie_name','',time()*3600*24);//重设cookie为空

            setcookie('cookie_pwd','',time()*3600*24);//重设cookie为空
		}

		$sql="SELECT * from stu_information where number ='$number' and password='$pwd'";//数据库匹配账号密码
		$result=mysqli_query($con,$sql);

		$row=mysqli_fetch_array($result);

		if($row){//登录成功


			session_start();

			$_SESSION['number']='student';

			$name=$row['name'];

			header("location:student.php?number=$number&name=$name");//跳转页面
		}
		else{
			echo "<script>alert('登录失败，账号或密码错误！');</script>";
		}
	}else if($type=="teacher"){

		if(isset($_POST['remember'])){//是否记住密码

			setcookie('cookie_name',$number,time()*3600*24);//记住账号一天


            setcookie('cookie_pwd',$pwd,time()*3600*24);//记住密码一天


		}else{

			setcookie('cookie_name','',time()*3600*24);//重设cookie为空

            setcookie('cookie_pwd','',time()*3600*24);//重设cookie为空
		}

		$sql="SELECT * from tea_information where number ='$number' and password='$pwd'";
		//数据库匹配账号密码
		$result=mysqli_query($con,$sql);

		$row=mysqli_fetch_array($result);

		if($row){//登录成功

			session_start();

			$_SESSION['number']='teacher';

			$name=$row['name'];

			header("location:teacher.php?number=$number&name=$name");//跳转页面
		}
		else{
			echo "<script>alert('登录失败，账号或密码错误！');</script>";
		}
	}

	
}

@$cookie_name=$_COOKIE['cookie_name'];

@$cookie_pwd=$_COOKIE['cookie_pwd'];

$smarty->assign('cookie_name',$cookie_name);//传递记住密码的账号到模板页面

$smarty->assign('cookie_pwd',$cookie_pwd);//传递记住密码的密码到模板页面

$smarty->display('login.html');
?>