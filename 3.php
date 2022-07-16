<?php 
	$link=mysqli_connect('localhost','chen','123456');
	//var_dump($link);
	if(!$link){
		exit('数据库链接错误');
	}
	mysqli_set_charset($link,'utf8');
	mysqli_select_db($link,'shujuku');
	$sql="select * from goods";
	$res=mysqli_query($link,$sql);
	//$result=mysqli_insert_id($link);
	//$result=mysqli_affected_rows($link);
	//$result=mysqli_num_rows($res);
	//$result=mysqli_fetch_row($res);
	//$result=mysqli_fetch_array($res);
	$result=mysqli_fetch_assoc($res);
	var_dump($result);
	/* while($rows=mysqli_fetch_assoc($result)){
		
	var_dump($rows);
	}
	*/
	mysqli_close($link);
?>