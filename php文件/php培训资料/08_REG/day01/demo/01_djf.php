<?php 
//定界符应用举例
$subject = "this is a test";
//正则表达式
$pattern = "//";
preg_match_all($pattern,$subject,$match);
var_dump($match);