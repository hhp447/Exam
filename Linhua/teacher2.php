<?php
include "./include.php";

$id=$_GET['id'];//获取实验的ID号

$number=$_GET['number2'];//获取实验的学生号

$tea_num=$_GET['number'];//获取教师号，为主页按钮做准备

$name=$_GET['name'];//获取教师名，为主页按钮做准备

$sql="SELECT * from bc_timu where ex_id='$id' and number='$number'";//查找对应的代码

$result=mysqli_query($con,$sql);//执行

$ques_code = array();

while($row=mysqli_fetch_array($result)){

	$timu_id = $row['timu_id'];

	$code=$row['code'];

	$sql_="SELECT * from tiku where id='$timu_id'";
	$res_=mysqli_query($con,$sql_);
	$row_ = mysqli_fetch_array($res_);
	$question = $row_['question'];
	$ques_code[$question] = $code;
}



/*$code=str_replace('<','&lt;',$row['code']);//将‘<’号转义

$code=str_replace('>','&gt;',$code);//将‘>’号转义
*/
$smarty->assign('number2',$number);//传递学生号到模板页面

$smarty->assign('id',$id);//传递实验ID到模板页面

$smarty->assign('name',$name);//传递教师名到模板页面

$smarty->assign('number',$tea_num);//传递教师号到模板页面

$smarty->assign('ques_code',$ques_code);//传递教师号到模板页面


/***
**
**教师评价按钮
**/
if(isset($_POST['submit'])){

	$select=$_POST['select'];//获取分数

	$opinion=$_POST['opinion'];//获取意见

	$teacher=$_POST['teacher'];//获取批改教师

	$up_sql="UPDATE grade set opinion='$opinion',point_='$select',teacher='$teacher' where id='$id' and number='$number'";

	$res=mysqli_query($con,$up_sql);

	if($res){
		echo "<script>alert('批改成功！');parent.location.href='teacher1.php?id=$id&name=$name&number=$tea_num';</script>";
	}else{
		echo "<script>alert('批改失败！');</script>";
	}
}


$smarty->display("teacher2.html");//显示模板
?>