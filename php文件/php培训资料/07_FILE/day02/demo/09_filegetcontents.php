<?php 
//获取文件中的内容
//$filename = 'a.txt';
$filename = "http://www.baidu.com";
$contents = file_get_contents($filename);
var_dump($contents);