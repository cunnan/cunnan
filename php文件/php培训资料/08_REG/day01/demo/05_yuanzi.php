<?php 
//原子应用举例
$subject = "th12i4s i6_a9 t7es0t";
//正则表达式,匹配subject中所有的数字、字母 下划线
//$pattern = "/\w/";
//正则表达式,匹配subject中所有的非数字、字母 下划线
$pattern = "/\W/";
preg_match_all($pattern,$subject,$match);
var_dump($match);