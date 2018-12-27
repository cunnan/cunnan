<?php 
header("Content-Type:text/html;charset=utf-8");
//遍历目录
//1、打开目录
//3、应用opendir一组函数循环读取出目录下的内容。
$pathname = "test";
$dir = opendir($pathname);
/*
 * 4、将上一题循环读取出的内容进行判断，分别判断出文件和目录。
      要求输出：文件：***
                        目录：***
 */
//2、读取目录
while($filename = readdir($dir)){
	//过滤掉 . 和 ..
	//if($filename!="."&&$filename!=".."){
	if(!($filename=="."||$filename=="..")){	
		echo $filename;
		echo "<br/>";
	}
}

//3、关闭目录
closedir($dir);





















