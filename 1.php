<?php
	//1.链接数据库lllll
	$link=mysqli_connect('localhost','chen','123456');
	//var_dump($link);
	
	 // 2.判断是否链接成功
	if(!$link){
		
	}
	// 3.设置字符集
	mysqli_set_charset($link,'utf8');
	
	// 4.选择数据库
	mysqli_select_db($link,'shujuku');
	
	// 5.准备SQL语句
	$sql="select * from goods";
	
	// 6.发送SQL语句
	$res=mysqli_query($link,$sql);
	var_dump($res);
	
	///7.处理结果集
	$result=mysqli_fetch_assoc($res);
	// var_dump($result);
	 
	// 8.关闭数据库
	
	mysqli_close($link); 
 ?> 