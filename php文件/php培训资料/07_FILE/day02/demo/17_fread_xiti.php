<?php 
//应用fread读取出a.txt文件中的内容
//5、应用fread读取出文件中的内容，要求一次读取出全部文件内容。
$filename = "a.txt";
$fh = fopen($filename,"r");

echo fread($fh,filesize($filename));

fclose($fh);

