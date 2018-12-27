<?php 
header("Content-Type:text/html;charset=utf-8");
/*
 * 2、应用glob遍历当前目录，将当前目录中的内容进行输出，
 * 要求一行输出一个目录内容。
 */
$filename = "./*";
$result = glob($filename);
foreach($result as $value){
	if(is_file($value)){
		echo "文件：".$value."<br/>";
	}
	if(is_dir($value)){
		echo "目录：".$value."<br/>";
	}
}