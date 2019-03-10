<?php
include "./include.php";
include "./config.php";

$number = $_GET['number'];//获取学号，回传主页

$ex_id = $_GET['id'];//获取实验ID

$check_sql="SELECT * from grade where id='$ex_id' and number='$number'";

$check_res = mysqli_query($con,$check_sql);

$check_row = mysqli_fetch_array($check_res);

$check = $check_row['checked'];

if($check==1){
	echo '<script>alert("您已经做过此实验，不能重复实验");window.history.go(-1);</script>';die;
}









$stu_sql="SELECT * from stu_information where number='$number'";//用学号查询该学生的姓名

$stu_row=mysqli_fetch_array(mysqli_query($con,$stu_sql));

$stu_name=$stu_row['name'];//获取学生姓名,回传主页



$sql="SELECT ex_name FROM ex where id='$ex_id'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
$ex_name = $row['ex_name'];//获取实验名称

$exam = getExam($con,$ex_id);//获取各种题的题目id

$bian_id = $exam['bian'];//获取编程题题目ID，传递给defen.php



/***
**
**选择题
**
**/
$xuan = "";
$xuan_answer="";$num = 0;
foreach($exam["xuan"] as $index=>$id){
	$num++;
	$sql = "SELECT * from tiku where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);
	$index = $index+1;
	$question = $row['question'];
	$selection_a = $row['selection_a'];
	$selection_b = $row['selection_b'];
	$selection_c = $row['selection_c'];
	$selection_d = $row['selection_d'];
	$answer = $row['answer'];
	$xuan_answer.=$answer;
	$xuan = $xuan."<p>
				$index 、$question
					<dl>
						<dd>A.$selection_a</dd>
						<dd>B.$selection_b</dd>
						<dd>C.$selection_c</dd>
						<dd>D.$selection_d</dd>
					</dl>
					A&nbsp;<input type='radio' name='xuan_$num' value='A' />
					B&nbsp;<input type='radio' name='xuan_$num' value='B' />
					C&nbsp;<input type='radio' name='xuan_$num' value='C' />
					D&nbsp;<input type='radio' name='xuan_$num' value='D' />
				</p>
				<hr>";
}$xuan.="<input type='hidden' id='xuan_answer' value='$xuan_answer'>
<input type='hidden' id='num' value='$num'>";




/***
**
**填空题
**
**/
$tian="";$tian_num=0;
foreach($exam["tian"] as $index=>$id){
	$tian_num++;
	$sql = "SELECT * from tiku where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);
	$index = $index+1;
	$question = $row['question'];
	$answer=$row['answer'];
	$tian.="<p>
				$index 、$question
				<br /><br />
				<input type='text' class='form-control' id='tian_$tian_num' />
				<input type='hidden' class='form-control' id='tian_$tian_num-answer' value='$answer' />
			</p>
			<hr>";
			
}$xuan.="<input type='hidden' id='tian_num' value='$tian_num'>";





/***
**
**程序题
**
**/
$cheng="";$cheng_num=0;
foreach($exam["cheng"] as $index=>$id){
	$cheng_num++;
	$sql = "SELECT * from tiku where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);
	$index = $index+1;
	$answer=$row['answer'];
	$question = $row['question'];
	$cheng.="<p>
					$index 、$question
					<br /><br />
					<input type='text' class='form-control' id='cheng_$cheng_num'/>
					<input type='hidden' class='form-control' id='cheng_$cheng_num-answer' value='$answer' />
				</p>
				<hr>";

}$cheng.="<input type='hidden' id='cheng_num' value='$cheng_num'>";





/***
**
**编程题
**
**/
$bian="";$bian_num=0;
foreach($exam["bian"] as $index=>$id){
	$bian_num++;
	$sql = "SELECT * from tiku where id = '$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);
	$index = $index+1;
	$question = $row['question'];
	$bian.="<p>
				$index 、 $question
				<br /><br /> 
				<textarea style='width:880px;height:200px;visibility:hidden;' name='code' id='bian_$bian_num'></textarea>
				</p>
				<hr />
				<input type='hidden' name='bian_id' value='$id'>";
}$bian.="<input type='hidden' id='bian_num' value='$bian_num'>";

$aaa = compact("xuan","tian","cheng","bian");

/*print_r($aaa);die;*/
$smarty->assign("exam",$aaa);
$smarty->assign("stu_name",$stu_name);
$smarty->assign("number",$number);
$smarty->assign("ex_name",$ex_name);
$smarty->assign("ex_id",$ex_id);
$smarty->assign("bian_id",$bian_id);
$smarty->display('exam.html');

?>