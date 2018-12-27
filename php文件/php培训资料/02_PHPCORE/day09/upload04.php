<?php
header('Content-Type:text/html;charset=utf-8');
require 'inc/common.function.php';
echo '<pre>';
print_r($_FILES);
echo '<pre>';
// 上传数据关联+关联的二维数组,所以转为索引+关联的二维数组
foreach($_FILES as $val){ //$val 一维数组
	$newarr[] = $val;
}
echo '<pre>';
print_r($newarr);
echo '<pre>';

//  实现多文件上传
foreach($newarr as $v){ // $v 一维数组
	// 1.判断每个文件的报错值等0 0代表成功
	if($v['error']==0){
	  // 2.对上传文件重名,避免文件冲突
	  $filename = $v['name'];	
	  $ext = exTension($filename);
	  $filename = uuid().'.'.$ext;
	  //3.对每个文件实现上传
	  move_uploaded_file($v['tmp_name'],'upload/'.$filename);
	}
	
}











































































