<?php
include "./include.php";

@$number=isset($_GET['number'])?$_GET['number']:$_POST['number'];//获取上一页面传来的学号

$sql="SELECT * from stu_information where number='$number'";//查询该学号的所有资料

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

$name=$row['name'];//获取名字

$sex=$row['sex'];//获取性别

$school=$row['school'];//获取学校

$institute=$row['institute'];//获取学院

$major=$row['major'];//获取专业

$email=$row['email'];//获取邮箱

$content=compact('number','name','sex','school','institute','major','email');
//将所有数据压缩成一个数组





/**
**
**第二选项卡：修改资料
**
*/

if(isset($_POST['submit'])){
	$up_name=$_POST['name'];

	$up_school=$_POST['school'];

	$up_institute=$_POST['institute'];

	$up_major=$_POST['major'];

	$up_email=$_POST['email'];

	$up_sql="UPDATE stu_information set name='$up_name',school='$up_school',institute='$up_institute',major='$up_major',email='$up_email' where number='$number'";

	$up_res=mysqli_query($con,$up_sql);

	if($up_res){
		echo "<script> alert('修改成功！');parent.location.href='information.php?number=$number';</script>";
	}else{
		echo "<script>alert('修改失败');</script>";
	}
}


/**
**
**第二选项卡：修改密码
**
*/
if(isset($_POST['submit_pwd'])){
	$old_pwd=$_POST['old_pwd'];

	$new_pwd1=$_POST['new_pwd1'];

	$new_pwd2=$_POST['new_pwd2'];

	$pwd_sql="SELECT * FROM stu_information where number='$number'";

    $pwd_res=mysqli_query($con,$pwd_sql);

    $pwd_row=mysqli_fetch_array($pwd_res);

    $pwd=$pwd_row['password'];
    if($pwd==$old_pwd){
    	if($new_pwd1==$new_pwd2){
    		$update_pwd="UPDATE stu_information set password='$new_pwd1' where number='$number'";
    		$update_res=mysqli_query($con,$update_pwd);
    		if($update_res){
    			echo "<script>alert('修改成功！');</script>";
    		}else{
    			echo "<script>alert('修改失败！');</script>";
    		}
    	}else{
    		echo "<script>alert('两次密码不一致，请重试');</script>";
    }
    	
    }else{
    	echo "<script>alert('密码错误，请重试');</script>";
    }
}


$smarty->assign('content',$content);//分配到模板页面

$smarty->display('information.html');//显示模板
?>