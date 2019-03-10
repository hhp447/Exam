<?php
include './include.php';
include './config.php';
    if(isset($_POST['nam'])){

    	$array = $_POST['nam'];

    	$ex_name = $_POST['ex_name'];

    	$ex_yaoqiu = $_POST['ex_yaoqiu'];

    	@$must = $_POST['must'];

    	$author = $_POST['author'];

    	$num_xuan = $_POST['num_xuan'];
    	$num_tian = $_POST['num_tian'];
    	$num_cheng = $_POST['num_cheng'];
    	$num_bian = $_POST['num_bian'];

    	$time = time();

    	$score = $num_xuan*5+$num_tian*5+$num_cheng*10+$num_bian*20;
    	if($score!=100){

    		echo "实验总分不为100分，请重新组织实验";die;

    	}else{

    		$sql="insert into ex(ex_name,ex_request,author,time,must) values ('$ex_name','$ex_yaoqiu','$author','$time','$must')";//发布实验，插入数据库

    		$result=mysqli_query($con,$sql);//执行sql语句

    		$sql_maxid="SELECT max(id) from ex";
    		$res = mysqli_query($con,$sql_maxid);
			$max = mysqli_fetch_array($res);
    		$id = $max[0];

    		foreach($array as $timu_id){

    			$type_id = getType_id($con,$timu_id);

    			$sql_="INSERT into ex_timu(ex_id,timu_id,type_id) values('$id','$timu_id','$type_id')";

    			$res_ = mysqli_query($con,$sql_);
    		}

    	

  			 if($result){
    			echo "发布成功，等待管理员审核！";
   			 }else{
    				echo "对不起，发布失败！";
   				 }






    	}
  		}else{
   	   		echo "请选择实验题目";
   	 }

?>