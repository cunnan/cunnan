<?php 
header("Content-Type:text/html;charset=utf-8");
//判断一个文件是否可读
$filename = "test.txt";
$filename = "php.exe";
if(is_readable($filename)){
	echo "可读";
}
if(is_writable($filename)){
	echo "<br/>可写";
}
if(is_executable($filename)){
	echo "<br/>可执行";
}