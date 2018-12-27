<?php 
/*
 * 1、应用普通字符串处理函数，找到下面字符串中的文件名称
$url = "http://www.baidu.com/index.php"
$url = "../image/dog.jpg"
将找到文件名称的功能封装为一个自定义函数。要求参数为给定的
地址。
*/

function getFileName($url){
	//确定/的位置
	$pos = strrpos($url,"/");
	$filename = substr($url,$pos+1);
	return $filename;
}
$url = "http://www.baidu.com/index.php";
$url = "../image/dog.jpg";
echo getFileName($url);












