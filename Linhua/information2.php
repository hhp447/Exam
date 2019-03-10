<?php
include "./include.php";

@$number=isset($_GET['number'])?$_GET['number']:$_POST['number'];//获取上一页面传来的教师号

$sql="SELECT * FROM tea_information where number='$number'";//查询此教师所有资料

$res=mysqli_query($con,$sql);//执行

$row=mysqli_fetch_array($res);

$name=$row['name'];//获取教师姓名

$sex=$row['sex'];//获取教师性别

$school=$row['school'];//获取教师毕业学校

$education=$row['education'];//获取教师学历

$group=$row['group'];//获取教师所属科组

$email=$row['email'];//获取教师邮箱

$array=compact("number","name","sex","school","education","group","email");//将所有资料组合成一个数组

$smarty->assign('info',$array);//分配到模板




//第二个选项卡
if(isset($_POST['submit'])){
	$two_name=$_POST['name'];
	$two_education=$_POST['education'];
	$two_school=$_POST['school'];
	$two_group=$_POST['group'];
	$two_email=$_POST['email'];

    $two_sql="UPDATE tea_information SET `name`='$two_name',`education`='$two_education',`school`='$two_school',`group`='$two_group',`email`='$two_email' WHERE `number`='$number'";
	$two_res=mysqli_query($con,$two_sql);
	
	if($two_res){
		//echo "<script>alert('修改成功！');</script>";
	echo "<script> alert('修改成功！');parent.location.href='information2.php?number=$number';</script>";
	}else{
		echo "<script>alert('修改失败！');</script>";
	}
}



/*
 *
 *第三选项卡：修改密码
 *
 */
if(isset($_POST['submit_pwd'])){
	$old_pwd=$_POST['old_pwd'];
	$new_pwd1=$_POST['new_pwd1'];
    $new_pwd2=$_POST['new_pwd2'];
    $pwd_sql="SELECT * FROM tea_information where number='$number'";
    $pwd_res=mysqli_query($con,$pwd_sql);
    $pwd_row=mysqli_fetch_array($pwd_res);
    $pwd=$pwd_row['password'];
    if($pwd==$old_pwd){
    	if($new_pwd1==$new_pwd2){
    		$update_pwd="UPDATE tea_information set password='$new_pwd1' where number='$number'";
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


$smarty->display('information2.html');

?>