<?php
include './include.php';

session_start();

@$number=$_GET['number'];  //获取教师号

@$name=$_GET['name'];//获取教师名

if(isset($_SESSION['number'])=='teacher'){   


    

/*
 *
 *第二选项卡：批改实验--------在ajax.php里
 *
 */

$smarty->assign('number',$number);//教师号

$smarty->assign('name',$name);//教师名

$smarty->display('teacher.html');
}else{
	echo "404 no found";
}

?>