<?php
include "./include.php";

header('Content-type:text/json'); //输出json数据必须要加上这句

$sql_xuan="SELECT * from tiku where type_id = 1";

$sql_tian="SELECT * from tiku where type_id = 2";

$sql_cheng="SELECT * from tiku where type_id = 3";

$sql_bian="SELECT * from tiku where type_id = 4";

$res_xuan=mysqli_query($con,$sql_xuan);

$res_tian=mysqli_query($con,$sql_tian);

$res_cheng=mysqli_query($con,$sql_cheng);

$res_bian=mysqli_query($con,$sql_bian);

$xuanze="<table class='table table-bordered'>
		<div >
		<tr>
		<th><input type='checkbox' /></th>
		<th>试题ID</th>
		<th>试题类型</th>
		<th>题目</th>
		</tr>";

$tiankong=$xuanze;

$chengxu=$xuanze;

$biancheng=$xuanze;

while($row1=mysqli_fetch_array($res_xuan)){

	$id=$row1['id'];

	$question = $row1['question'];

	$add="	<tr>
			<td><input type='checkbox' name='xuanze' value='$id'/></td>
			<td>$id</td>
			<td>选择题</td>		
			<td>$question</td>
			</tr>";
	$xuanze=$xuanze.$add;

}

while($row1=mysqli_fetch_array($res_tian)){

	$id=$row1['id'];

	$question = $row1['question'];

	$add="	<tr>
			<td><input type='checkbox' name='tiankong' value='$id'/></td>
			<td>$id</td>
			<td>填空题</td>		
			<td>$question</td>
			</tr>";
	$tiankong=$tiankong.$add;
}

while($row1=mysqli_fetch_array($res_cheng)){

	$id=$row1['id'];

	$question = $row1['question'];

	$add="	<tr>
			<td><input type='checkbox' name='chengxu' value='$id'/></td>
			<td>$id</td>
			<td>程序运行题</td>		
			<td>$question</td>
			</tr>";
	$chengxu=$chengxu.$add;
}

while($row1=mysqli_fetch_array($res_bian)){

	$id=$row1['id'];

	$question = $row1['question'];

	$add="	<tr>
			<td><input type='checkbox' name='biancheng' value='$id'/></td>
			<td>$id</td>
			<td>编程题</td>		
			<td>$question</td>
			</tr>";
	$biancheng=$biancheng.$add;
}







$arr = array('xuanze'=>$xuanze,'tiankong'=>$tiankong,"chengxu"=>$chengxu,"biancheng"=>$biancheng);
$json = json_encode($arr);
echo $json;


?>