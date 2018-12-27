<?php 
header("Content-Type:text/html;charset=utf-8");
//遍历目录
//1、打开目录
//3、应用opendir一组函数循环读取出目录下的内容。

$pathname = "test";
$dir = opendir($pathname);

//2、读取目录
echo readdir($dir);
echo "<br/>";
echo readdir($dir);
echo "<br/>";
echo readdir($dir);
echo "<br/>";
echo readdir($dir);
var_dump(readdir($dir));
//3、关闭目录
closedir($dir);




