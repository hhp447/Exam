<?php
include "./include.php";

$number=$_GET['number'];//获取学号

if(isset($_GET['must'])){

  $must = $_GET['must'];

}else{

  $must = 1;
}
if($must==1){
  $leixing="必做";
}else{
  $leixing="选做";
}

$page=isset($_GET['page'])?intval($_GET['page']):1;//获取当前页数

$num=5; //每页显示5条数据

$result=mysqli_query($con,"select * from ex where ex_check=1 and must='$must'");//查找所有数据

$total=mysqli_num_rows($result); //获取数据条数

$url="student_ajax.php?number=$number&must=$must";//获取本页URL

$pagenum=ceil($total/$num);          //获得总页数,也是最后一页

$page=min($pagenum,$page);//获得首页

$prepg=$page-1;//上一页

$nextpg=($page==$pagenum ? 0 : $page+1);//下一页

$offset=($page-1)*$num;

$first=" <a href=javascript:dopage('result','$url&page=1&must=$must');>首页</a> ";//导航

if($prepg)

	$pre=" <a href=javascript:dopage('result','$url&page=$prepg&must=$must');>前页</a> "; //导航

else

	$pre=" ";

if($pagenum==1){

  $page_="<li><a href=javascript:dopage('result','$url&page=1&must=$must');>1</a></li><li></li><li></li>";

}else if($pagenum==2){

  $page_="<li><a href=javascript:dopage('result','$url&page=1&must=$must');>1</a></li>
          <li><a href=javascript:dopage('result','$url&page=2&must=$must');>2</a></li>
          <li></li>";

}else if($pagenum==3){

  $page_="<li><a href=javascript:dopage('result','$url&page=1&must=$must');>1</a></li> 
          <li><a href=javascript:dopage('result','$url&page=2&must=$must');>2</a></li>
          <li><a href=javascript:dopage('result','$url&page=3&must=$must');>3</a></li>";

}else if($pagenum>3){

  $page_="<li><a href=javascript:dopage('result','$url&page=1&must=$must');>1</a></li>
          <li><a href=javascript:dopage('result','$url&page=2&must=$must');>2</a></li>
          <li><a href=javascript:dopage('result','$url&page=3&must=$must');>3</a></li>
          <li><a href='#'>...</a></li>";

}

if($nextpg)

	$next=" <a href=javascript:dopage('result','$url&page=$nextpg&must=$must');>后页</a> ";//导航

else

	$next=" ";

$last=" <a href=javascript:dopage('result','$url&page=$pagenum&must=$must');>尾页</a> ";//导航

$six="<a href='#'>共 $pagenum 页</a>";//导航

if($page>$pagenum){

       Echo "Error : Can Not Found The page ".$page;

       Exit;
}

$info=mysqli_query($con,"select * from ex where ex_check = 1 and must='$must' order by id limit $offset,$num");//限制查询

echo "<table class='table table-bordered table-striped'>
	  <tr>
		<th>实验序号</th>
		<th>实验名称</th>
		<th>实验要求</th>
    <th>实验类型</th>
		<th>选做</th>
      </tr>";

While($it=mysqli_fetch_array($info)){

  $id=$it['id'];//获取实验ID

  $name=$it['ex_name'];//获取实验名称

  $request=$it['ex_request'];//获取实验要求

  echo "<tr>
		<td>实验$id</td>
		<td>$name</td>
		<td>$request</td>
    <td>$leixing</td>
		<td>
		<a href='exam.php?number=$number&id=$id'><span class='glyphicon glyphicon-edit'></span></a>
		</td>
		</tr>";//输出实验ID和标题
      
}
//显示数据
echo "</table>";
echo "<ul class='pagination'>

          <li>$first</li>

          <li>$pre</li>

          $page_

          <li>$next</li>

          <li>$last</li>

          </ul>";//输出分页导航


?>
