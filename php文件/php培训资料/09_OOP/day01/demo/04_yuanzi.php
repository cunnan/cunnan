<?php 
//原子应用举例
$subject = "th12i4s i6s a9 t7es0t";
//正则表达式,匹配subject中所有的数字
//$pattern = "/\d/";
//正则表达式，匹配subject中所有的非数字
$pattern = "/\D/";
preg_match_all($pattern,$subject,$match);
var_dump($match);