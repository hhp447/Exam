<?php
include "./include.php";


@$nam=$_GET['name'];//获取登录教师的姓名，为teacher1.php的主页按钮服务

@$number=$_GET['number'];//获取登录教师的教师号，为teacher1.php的主页按钮服务



if(isset($_GET['find'])){

  $id=$_GET['id'];//获取查询传来的ID

  $id=intval($id);

  $res=mysqli_query($con,"select * from ex where id=$id");

  

 /* if(!$res){

    echo "<script>alert('无此实验序号');</script>";

  }*/

  $row=mysqli_fetch_array($res);

  $name=$row['ex_name'];

  echo "<a href='teacher1.php?id=$id&number=$number&name=$nam'>

        <div class='col-md-4 expe'><h4>实验$id</h4><br/>

        <small>$name</small>

        </div>

        </a>";//输出实验ID和标题

        die;
}











$page=isset($_GET['page'])?intval($_GET['page']):1;//获取当前页数

$num=6; //每页显示3条数据

$result=mysqli_query($con,"select * from ex where ex_check=1");//查找所有数据

$total=mysqli_num_rows($result); //获取数据条数

$url="ajax.php?number=$number&name=$nam";//获取本页URL

$pagenum=ceil($total/$num);          //获得总页数,也是最后一页

$page=min($pagenum,$page);//获得首页

$prepg=$page-1;//上一页

$nextpg=($page==$pagenum ? 0 : $page+1);//下一页

$offset=($page-1)*$num;

/*$one="显示第 <B>".($total?($offset+1):0)."</B>-<B>".min($offset+3,$total)."</B> 条记录，共 $total 条记录 ";*/

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

$info=mysqli_query($con,"select * from ex where ex_check=1 order by id limit $offset,$num");//限制查询
echo "<table class='table table-border table-striped'>
            <tr>
              <th>实验序号</th>
              <th>实验题目</th>
              <th>实验类型</th>
              <th>发布时间</th>
              <th></th>
            </tr>";

While($it=mysqli_fetch_array($info)){

  $id=$it['id'];//获取实验ID

  $name=$it['ex_name'];//获取实验标题

  $time = date("Y-m-d",$it['time']);

  $must = $it['must'];

  if($must==1){
    $leixing = "必做";
  }else{
    $leixing = "选做";
  }

        echo "<tr>
              <td>实验$id</td>
              <td>$name</td>
              <td>$leixing</td>
              <td>$time</td>
              <td>
              <a href='teacher1.php?id=$id&number=$number&name=$nam'><span class='glyphicon glyphicon-pencil'></span></a>
              </td>
              </tr>";
      
}
echo "</table>";
/*
          <li>$one</li>

          <li>$two</li>

          <li>$three</li>*/
//显示数据
echo "<ul class='pagination'>

          <li>$first</li>

          <li>$pre</li>

          $page_

          <li>$next</li>

          <li>$last</li>

          </ul>";//输出分页导航

?>