<?php 
//判断文件或者目录是否存在
header("Content-Type:text/html;charset=utf-8");
$filename = "test";

if(file_exists($filename)){
	echo "文件存在";
}else{
	echo "文件不存在";
}