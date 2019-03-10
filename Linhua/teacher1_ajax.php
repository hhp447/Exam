<?php

include "./include.php";

$id=$_GET['id'];

$name=$_GET['name'];

$number=$_GET['number'];

$page=isset($_GET['page'])?intval($_GET['page']):1;//获取当前页数

$num=6; //每页显示6条数据

$result=mysqli_query($con,"select * from grade where id='$id'");//查找所有数据

$total=mysqli_num_rows($result); //获取数据条数

$url="teacher1_ajax.php?id=$id&name=$name&number=$number";//获取本页URL

$pagenum=ceil($total/$num);          //获得总页数,也是最后一页

$page=min($pagenum,$page);//获得首页

$prepg=$page-1;//上一页

$nextpg=($page==$pagenum ? 0 : $page+1);//下一页

$offset=($page-1)*$num;

$first=" <a href=javascript:dopage('result','$url&page=1');>首页</a> ";//导航

if($prepg)

	$pre=" <a href=javascript:dopage('result','$url&page=$prepg');>前页</a> "; //导航

else

	$pre=" ";

if($pagenum==1){

  $page_="<li><a href=javascript:dopage('result','$url&page=1');>1</a></li><li></li><li></li>";

}else if($pagenum==2){

  $page_="<li><a href=javascript:dopage('result','$url&page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url&page=2');>2</a></li>
          <li></li>";

}else if($pagenum==3){

  $page_="<li><a href=javascript:dopage('result','$url&page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url&page=2');>2</a></li>
          <li><a href=javascript:dopage('result','$url&page=3');>3</a></li>";

}else if($pagenum>3){

  $page_="<li><a href=javascript:dopage('result','$url&page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url&page=2');>2</a></li>
          <li><a href=javascript:dopage('result','$url&page=3');>3</a></li>
          <li><a href='#'>...</a></li>";

}

if($nextpg)

	$next=" <a href=javascript:dopage('result','$url&page=$nextpg');>后页</a> ";//导航

else

	$next=" ";

$last=" <a href=javascript:dopage('result','$url&page=$pagenum');>尾页</a> ";//导航

$six="<a href='#'>共 $pagenum 页</a>";//导航

if($page>$pagenum){

       Echo "Error : Can Not Found The page ".$page;

       Exit;
}
$info=mysqli_query($con,"select * from grade where id='$id' limit $offset,$num");//限制查询

echo "<p>实验人数：&nbsp;<strong>$total</strong>&nbsp;</p>
	  <table class='table table-striped table-bordered'>";
	  echo "<tr><th>姓名</th><th>学号</th><th>实验内容</th></tr>
		  <tr>";

While(@$row=mysqli_fetch_array($info)){

    $number2=$row['number'];//获取学生学号

	$stu_sql="SELECT * FROM stu_information where number='$number2'";

	$stu_result=mysqli_query($con,$stu_sql);//执行sql语句

	$roww=mysqli_fetch_array($stu_result);

	$name2=$roww['name'];

	echo "<td>$name2</td>
		  <td>$number2</td>
		  <td>
		  <a href='teacher2.php?id=$id&number=$number&name=$name&number2=$number2'>实验内容&nbsp;&nbsp;
		  <span class='glyphicon glyphicon-share-alt'></span></a>
		  </td>					
		  </tr>";
      
}
//显示数据
echo "</table>";

if($total==0){
	die;
}else{
	echo "<div class='page'>

	  <ul class='pagination'>

		  <li>$first</li>

          <li>$pre</li>

          $page_

          <li>$next</li>

          <li>$last</li>

	  </ul>

	  </div>";//输出分页导航
}


?>