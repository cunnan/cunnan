<?php
//4、应用fgets 读取a.txt文件中的内容，循环读出。
$filename = "a.txt";
//打开文件
$fh = fopen($filename,"r");

while($string=fgets($fh)){
	echo $string;
	echo "<br/>";
}



//关闭文件
fclose($fh);










