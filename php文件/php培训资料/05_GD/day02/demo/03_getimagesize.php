<?php 
//获取文件信息
//$filename = "dog.jpg";
//$filename = "monkey.jpg";
//$filename = "dog.gif";
$filename = "qq.png";
$fileinfo = getimagesize($filename);
var_dump($fileinfo);