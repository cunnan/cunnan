<?php
header('Content-Type:text/html;charset=utf-8');
require 'inc/common.function.php';
echo '<pre>';
print_r($_FILES);
echo '<pre>';
// 上传数据三维数组，所以要转为索引+关联的二维数组
foreach($_FILES as $val){ //$val 二维数组
	foreach($val['name'] as $k=>$v){
		          // $val['name'] 一维数组
		          // $k 0 1 2
		          // $v  1.jpg 2.jpg 3.jpg
	   
	    $newarr[$k]['name'] = $v;
	    $newarr[$k]['type'] = $val['type'][$k];
	    $newarr[$k]['tmp_name']=$val['tmp_name'][$k];
	    $newarr[$k]['error']=$val['error'][$k];
	    $newarr[$k]['size']= $val['size'][$k];
	    
	}
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











































































