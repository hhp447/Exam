<?php
include "./include.php";

//获取数据与分配数据到模板

$id=$_GET['id'];

$number=$_GET['number'];

$name=$_GET['name'];

$smarty->assign('name',$name);

$smarty->assign('number',$number);

$smarty->assign('id',$id);

$smarty->display('teacher1.html');


?>