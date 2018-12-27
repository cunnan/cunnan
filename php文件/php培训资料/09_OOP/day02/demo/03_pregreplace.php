<?php 
header("Content-Type:text/html;charset=utf-8");
/*
 * 有如下的字符串，将字符串替换成带有链接的形式
 * $subject = "abchttps://www.baidu.comabchttp://www.sohu.comabcftp://image.biadu.comabcftps://www.sohu.comabc;
 */

$subject = "abchttps://www.baidu.comabchttp://www.sohu.comabcftp://image.biadu.comabcftps://www.sohu.comabc";

//正则表达式
$pattern = "/(https?|ftps?):\/\/([a-z0-9]+)\.([a-z0-9]+)\.(com|cn|org|net|com.cn)/";

$replace = "<a href='\\1://\\2.\\3.\\4'>\\1://\\2.\\3.\\4</a>";

echo preg_replace($pattern,$replace,$subject);



















