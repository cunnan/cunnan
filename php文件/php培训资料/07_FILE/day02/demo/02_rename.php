<?php 
//文件或者目录的重命名
//$oldname = "test";
//$newname = "test_new";
$oldname = "a.txt";
$newname = "b.txt";
var_dump(rename($oldname,$newname));