<?php 
//正则匹配函数
/*
 * 2、应用正则匹配，找到下面字符串中的所有数字
     $subject = "th3i4s i6s 8a te7st";
 */
$subject = "th3i4s i6s 8a te7st";
//正则表达式
//$pattern = "/\d/";
$pattern = "/[0-9]/";
preg_match_all($pattern,$subject,$match);
var_dump($match);













