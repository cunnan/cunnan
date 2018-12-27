<?php 
header("Content-Type:text/html;charset=utf-8");
//判断是否是文件和目录
$filename = "test.txt";
$filename = "test";
$filename = "./test/b";
if(is_file($filename)){
	echo "是文件";
}
if(is_dir($filename)){
	echo "是目录";	
}