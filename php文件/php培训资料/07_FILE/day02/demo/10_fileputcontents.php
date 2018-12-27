<?php 
//写入内容
$filename = "a.txt";
$contents = "file";
/*
 * 2、应用file_get_contents获取index.php文件中的内容：
     index.php文件中有如下内容
     hello world
     将获取到的内容应用file_put_contents写入到index1.php
     文件中。
*/
var_dump(file_put_contents($filename,$contents));