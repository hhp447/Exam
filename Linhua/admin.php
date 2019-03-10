<?php
include "./include.php";




/**
**
**点击用户管理模块的删除图标
**
*/
if(isset($_GET['delete'])){
    
    $number=$_GET['number'];//获取用户学号或者教师号

    $choose=$_GET['choose'];//获取选择（学生或者教师）

    if($choose=='学生'){

        $del_sql="DELETE FROM stu_information where number='$number'";

    }else{

        $del_sql="DELETE FROM tea_information where number='$number'";

    }
    $del_res=mysqli_query($con,$del_sql);

    if($del_res){

        echo "<script>alert('删除成功！');parent.location.href='admin.php?page=1&choose=$choose'</script>";

    }else{

        echo "<script>alert('删除失败！');</script>";

    }

}










/**
**
**添加用户模块
**
*/
if(isset($_POST['add'])){
    $name=$_POST['name'];//获取姓名

    $number=$_POST['number'];//获取学号或教师号

    $passwd=$_POST['passwd'];//获取密码

    $email=$_POST['email'];//获取邮箱

    $sex=$_POST['sex'];//获取性别

    $school=$_POST['school'];//获取（毕业）学校

    $in_gr=$_POST['institute'];//获取学院/组别

    $ma_ed=$_POST['major'];//获取专业/学历

    $add=$_POST['add'];//获取单选值
    
    if($add=="学生"){

        $add_sql="INSERT INTO stu_information set name='$name',number='$number',sex='$sex',institute='$in_gr',major='$ma_ed',password='$passwd',email='$email',school='$school'";

    }else{

        $add_sql="INSERT INTO tea_information values('$number','$passwd','$name','$sex','$school','$ma_ed','$in_gr','$email')";

    }

    $add_res=mysqli_query($con,$add_sql);

    if($add_res){
        echo "<script>alert('添加成功！');parent.location.href='admin.php'</script>";
    }else{
        echo "<script>alert('该学号已存在，添加失败！');parent.location.href='admin.php'</script>";
    }
}









/**
**
**分页显示用户管理模块的教师和学生数据
**
*/
$page=isset($_GET['page'])?intval($_GET['page']):1;//获取当前页数

$choose=isset($_GET['choose'])?$_GET['choose']:"学生";//获取用户管理的搜索按钮值

$num=9; //每页显示3条数据

if($choose=='学生')//显示的是学生

	$sql="SELECT * FROM stu_information";

else             //显示的是教师

	$sql="SELECT * FROM tea_information";

$result=mysqli_query($con,$sql);//查找所有数据

$total=mysqli_num_rows($result); //获取数据条数

$pagenum=ceil($total/$num);          //获得总页数,也是最后一页

if($page<1 || $page>$pagenum){

	echo "<script>alert('不存在此页！');parent.location.href='admin.php?page=1&choose=$choose'</script>";//page超出范围

}

$page=min($pagenum,$page);//获得首页

$prepg=$page-1;//上一页

$nextpg=($page==$pagenum ? 0 : $page+1);//下一页

$offset=($page-1)*$num;//查询条件

  $pre="上一页";

  $next="下一页";

$sqll=$sql." limit ".$offset.",".$num;//限制查询

$content=array();//建立空数组

$res=mysqli_query($con,$sqll);

while ($row=mysqli_fetch_array($res)) {  //循环获取各个学生或教师的数据

    $number=$row['number'];//获取学号或者教师号

    $passwd=$row['password'];//获取密码

    $name=$row['name'];//获取姓名

    $sex=$row['sex'];//获取性别

    $school=$row['school'];//获取学校

    $email=$row['email'];//获取邮箱

    if(isset($row['major'])){

	    $major_education=$row['major'];//获取专业

	    $institute_group=$row['institute'];//获取学院

	    $indentity="学生";

	    $con=compact('number','passwd','name','sex','school','email','major_education','institute_group','indentity','choose');//将数据压进一个数组

    }else{

    	$indentity="教师";

	    $major_education=$row['education'];//获取学历

	    $institute_group=$row['group'];//获取组别

	    $con=compact('number','passwd','name','sex','school','email','major_education','institute_group','indentity','choose');
    }

    array_push($content, $con);//将所有数据压进一个数组

}

$allpage=compact('prepg','nextpg','pre','next','pagenum','page');
//将分页有关的数据压进一个数据

$smarty->assign('page',$allpage); //将分页有关的数据分配到模板

$smarty->assign("content",$content);//分配数据到模板

$smarty->display('admin.html');//显示模板
?>