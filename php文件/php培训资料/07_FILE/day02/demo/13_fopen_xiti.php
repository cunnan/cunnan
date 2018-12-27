<?php 
/*
 * 3、在a.txt文件中读取出该文件的内容，
* 并在文件的末尾追加新的文本内容。
*/
$fh = fopen("a.txt","a+");

echo fgetc($fh);
fwrite($fh,"hello");

fclose($fh);













