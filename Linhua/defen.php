<?php
include "include.php";

if(isset($_POST['xuan'])){
	$score = 0;//非主观题（选择+填空+程序）部分总分




/***
**
**选择题统计分数部分
**
**/
	$xuan = $_POST['xuan'];
	$xuan_score=0;
	$xuan_answer = $_POST['xuan_answer'];
	$num = strlen($xuan);
	for($i=0;$i<$num;$i++){
		if(substr($xuan,$i,1)==substr($xuan_answer,$i,1)){
		$xuan_score+=5;
	}
	}


/***
**
**填空题统计分数部分
**
**/
$tian = $_POST['tian'];//填空题分数



/***
**
**程序题统计分数部分
**
**/

$cheng = $_POST['cheng'];//程序题分数



/****/
$score=$xuan_score+$tian+$cheng;
$ex_id = $_POST['ex_id'];//获取该实验id
$number = $_POST['number'];//获取该学生学号
$sql="INSERT INTO grade(id,number,point,checked) values('$ex_id','$number','$score',1)";
$result = mysqli_query($con,$sql);

$bian_id=$_POST['bian_id'];//获取编程题ID存进数据库
$code = $_POST['arr'];//获取编程题答案，为数组
$bian_num = count($bian_id);
for($i=0;$i<$bian_num;$i++){
	$sql = "INSERT INTO bc_timu(ex_id,number,timu_id,code) values('$ex_id','$number','$bian_id[$i]','$code[$i]')";
	$res = mysqli_query($con,$sql);
}








echo "提交成功！！！\n选择题分数为：".$xuan_score."\n填空题分数为：".$tian."\n程序和运行结果题分数为：".$cheng."\n非主观题总分为：".$score."\n主观题等待教师批改。";
	
}else{
	echo "404 not found";
}

?>