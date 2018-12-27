<?php 
//原子应用举例
$subject = "th	is is a te*s,9t";
//正则表达式,匹配subject中所有的空白
//$pattern = "/\s/";
//正则表达式,匹配subject中所有的非空白
$pattern = "/\S/";
preg_match_all($pattern,$subject,$match);
var_dump($match);