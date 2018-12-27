<?php
//4、应用fgets 读取a.txt文件中的内容，循环读出。
$filename = "a.txt";
//打开文件
$fh = fopen($filename,"r");

//读取文件中的内容，一次读取一行
echo fgets($fh);

//关闭文件
fclose($fh);










