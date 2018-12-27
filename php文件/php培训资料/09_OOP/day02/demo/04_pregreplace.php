<?php 
header("Content-Type:text/html;charset=utf-8");
/*
 * 有如下的字符串，将字符串替换成带有链接的形式
 * $subject = "abchttps://www.baidu.comabchttp://www.sohu.comabcftp://image.biadu.comabcftps://www.sohu.comabc;
 */

$subject = "abchttps://www.baidu.comabchttp://www.sohu.comabcftp://image.biadu.comabcftps://www.sohu.comabc";

$pattern = 
"/(https?|ftps?):\/\/([a-z0-9]+)\.(.*?)\.(com|cn|org|net|com.cn)/i";

preg_match_all($pattern,$subject,$match);
var_dump($match);






















