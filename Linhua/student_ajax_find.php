<?php

include "include.php";

$id=$_GET['id'];//获取传递过来的 ID

$number=$_GET['number'];//获取传递过来的学号


$sql="SELECT * FROM grade where id='$id' and number='$number'";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

$point1 = $row['point'];

$point2 = $row['point_'];

$point=$point1+$point2;

$teacher=$row['teacher'];

$opinion=$row['opinion'];

echo "<dl>
      <dt>实验序号：实验$id</dt>
	  <dd>实验总分：$point</dd>
	  <dd>批改教师：$teacher</dd>
	  <dd>批注内容：$opinion</dd>
	  </dl>"
?>