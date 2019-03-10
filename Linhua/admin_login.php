<?php
include "./include.php";

if(isset($_POST['submit'])){//如果点击Login in按钮

	$name=$_POST['name'];//获取账号

	$passwd=$_POST['passwd'];//获取密码

	if(isset($_POST['remember'])){//是否记住密码

			setcookie('cook_name',$name,time()*3600*24);//记住账号一天

            setcookie('cook_pwd',$passwd,time()*3600*24);//记住密码一天


		}else{

			setcookie('cook_name','',time()*3600*24);//重设cookie为空

            setcookie('cook_pwd','',time()*3600*24);//重设cookie为空
		}

	$sql="SELECT * from admin where ad_name='$name' and ad_passwd='$passwd'";//进数据库匹配

	$res=mysqli_query($con,$sql);//执行

	$row=mysqli_fetch_array($res);

	if($row){//判断

		echo "<script>parent.location.href='admin.php';</script>";//成功则跳转

	}else{

		echo "<script>alert('登录失败,账号或密码错误！');</script>";
	}

}

@$cook_name=$_COOKIE['cook_name'];

@$cook_pwd=$_COOKIE['cook_pwd'];

$smarty->assign('cookie_name',$cook_name);//传达记住密码的账号到模板页面

$smarty->assign('cookie_pwd',$cook_pwd);//传递记住密码的密码到模板页面

$smarty->display('admin_login.html');//显示模板

?>