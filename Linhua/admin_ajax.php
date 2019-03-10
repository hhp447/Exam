<?php

include "./include.php";





/**
**
**执行审核操作
**
**/
if(isset($_GET['check'])){

	$id=$_GET['id'];

	$check_sql="UPDATE ex set ex_check = 1 where id='$id'";

	$check_res=mysqli_query($con,$check_sql);

}






/**
**
**执行删除实验操作
**
**/
if(isset($_GET['del_ex'])){

	$id=$_GET['id'];

	$del_sql="DELETE FROM ex where id='$id'";

	$del_res=mysqli_query($con,$del_sql);

}







/**
**
**分页显示实验管理模块
**
**/

$page=isset($_GET['page'])?intval($_GET['page']):1;//获取当前页数

$num=9; //每页显示3条数据

$result=mysqli_query($con,"select * from ex");//查找所有数据

$total=mysqli_num_rows($result); //获取数据条数

$url="admin_ajax.php";//获取本页URL

$pagenum=ceil($total/$num);          //获得总页数,也是最后一页

$page=min($pagenum,$page);//获得首页

$prepg=$page-1;//上一页

$nextpg=($page==$pagenum ? 0 : $page+1);//下一页

$offset=($page-1)*$num;

$first=" <a href=javascript:dopage('result','$url?page=1');>首页</a> ";//导航

if($prepg)

	$pre=" <a href=javascript:dopage('result','$url?page=$prepg');>前页</a> "; //导航

else

	$pre=" ";

/*if($page<=3){

  $one=" <a href=javascript:dopage('result','$url?page=1');>1</a> ";//导航

  $two=" <a href=javascript:dopage('result','$url?page=2');>2</a> ";//导航

  $three=" <a href=javascript:dopage('result','$url?page=3');>3</a> ";//导航

}else{

  $one=""; $two=""; $three="";

}*/

if($pagenum==1){

  $page_="<li><a href=javascript:dopage('result','$url?page=1');>1</a></li><li></li><li></li>";//只有一页，显示1

}else if($pagenum==2){

  $page_="<li><a href=javascript:dopage('result','$url?page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url?page=2');>2</a></li>
          <li></li>";//有两页，显示1,2

}else if($pagenum==3){

  $page_="<li><a href=javascript:dopage('result','$url?page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url?page=2');>2</a></li>
          <li><a href=javascript:dopage('result','$url?page=3');>3</a></li>";
          //有三页，显示，1，2,3

}else if($pagenum>3){

  $page_="<li><a href=javascript:dopage('result','$url?page=1');>1</a></li>
          <li><a href=javascript:dopage('result','$url?page=2');>2</a></li>
          <li><a href=javascript:dopage('result','$url?page=3');>3</a></li>
          <li><a href='#'>...</a></li>";
          //超过3页，显示1,2,3，...

}

if($nextpg)

	$next=" <a href=javascript:dopage('result','$url?page=$nextpg');>后页</a> ";//导航

else

	$next=" ";

$last=" <a href=javascript:dopage('result','$url?page=$pagenum');>尾页</a> ";//导航

$six="<a href='#'>共 $pagenum 页</a>";//导航

if($page>$pagenum){

       Echo "Error : Can Not Found The page ".$page;

       Exit;
}

$info=mysqli_query($con,"select * from ex order by id limit $offset,$num");//限制查询

echo "<table class='table table-bordered table-striped'>
	<tr>
	<th>序号</th>
	<th>标题</th>
	<th>发布人</th>
	<th>发布时间</th>
	<th>实验人数</th>
	<th>实验类型</th>
	<th>操作</th>
	</tr>";//输出前端样式

While($it=mysqli_fetch_array($info)){

  $id=$it['id'];//获取实验ID

  $name=$it['ex_name'];//获取实验名称

  $time=date('Y-m-d H:i',$it['time']);//获取发布时间

  $check=$it['ex_check'];//获取审核状况，0则为未审核，1则为已经审核

  $author=$it['author'];//获取发布人

  $mus = $it['must'];//获取实验类型

  if($mus==0){
  	$must = "选做";
  }else{
  	$must = "必做";
  }

  $sql="SELECT * from grade where id='$id'";

  $res=mysqli_query($con,$sql);

  $ex_num=mysqli_num_rows($res);//获取实验人数

  echo "<tr>
			<td><a href='./admin2.php?id=$id'>实验$id</a></td>
			<td>$name</td>
			<td>$author</td>
			<td>$time</td>
			<td>$ex_num</td>
			<td>$must</td>
			<td>
			&nbsp;&nbsp;";//输出前端样式加后端数据

	if ($check) {
		echo "<a href='#' title='已通过审核'>
			<span class='glyphicon glyphicon-ok' style='color: aquamarine;'></span>
			</a>
			<a href=javascript:dopage('result','$url?id=$id&page=$page&del_ex=true'); title='删除实验'>
				<span class='glyphicon glyphicon-remove'></span></a>
				</td>
				</tr>";//输出前端样式加后端数据
	}else{
		echo "<a href=javascript:dopage('result','$url?id=$id&page=$page&check=true'); title='未通过审核：点击通过'>
		    <span class='glyphicon glyphicon-alert' style='color: brown;'></span>
			</a>
			<a href=javascript:dopage('result','$url?id=$id&page=$page&del_ex=true'); title='删除实验'>
			<span class='glyphicon glyphicon-remove'></span></a>
			</td>
			</tr>";//输出前端样式加后端数据
	}
			
      
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