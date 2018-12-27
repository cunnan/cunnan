<?php

//打开文件
$filename = "a.txt";

$fh = fopen($filename,"r");

//fgetc每次读取一个字节的文件内容，读取不到返回false
while($char=fgetc($fh)){//a b c d false
	echo $char;
	echo "<br/>";
}

/*echo fgetc($fh); 
echo "<br/>";
echo fgetc($fh);
echo "<br/>";
echo fgetc($fh);
echo "<br/>";
echo fgetc($fh);
echo "<br/>";
var_dump(fgetc($fh));*/

//关闭文件
fclose($fh);














