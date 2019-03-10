<?php
header("Content-type: text/html; charset=utf-8");

require_once './libs/Smarty.class.php';//包含smarty核心文件

$con=mysqli_connect("localhost",'root','huang447','experiment');//连接数据库

if (!$con){  //如果连接失败

  die('Could not connect: ' . mysql_error());

 }

mysqli_query($con,"SET NAMES UTF8");

$smarty=new Smarty;//新建smarty对象

$smarty->caching= false ;//不启用缓存

$smarty->left_delimiter = '<{!';//设定模板显示数据的左定界符

$smarty->right_delimiter = '!}>';//设定模板显示数据的右定界符

?>