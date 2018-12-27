<?php 

//打开文件
//$filename = "a.txt";
$filename = "b.txt";
//以只读形式打开文件
//$mode = "r";
//以读写方式打开文件，文件指针在文件首
//$mode = "r+";
//以只写方式打开文件。
//$mode = "w";
//以读写方式打开文件
//$mode = "w+";
//追加 只写
//$mode = "a";
//追加 读写
$mode = "a+";
$fh = fopen($filename,$mode);
//获取文件中的内容
echo fgetc($fh);
echo "<hr/>";
//向已经打开的文件中写入内容
var_dump(fwrite($fh,"hello")); //hello
//释放内存
fclose($fh);












