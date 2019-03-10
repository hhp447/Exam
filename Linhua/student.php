<?php
include './include.php';

session_start();//开启session

if(isset($_SESSION['number'])=='student'){

	$number=$_GET['number'];//接收学生学号

	$name=$_GET['name'];//接收学生姓名

	$smarty->assign('name',$name);//分配给模板

	$smarty->assign('number',$number);//分配给模板
	
	$smarty->display('student.html');//显示模板


	
}else{

	echo "404 no found";

}

?>