<?php 
//元字符应用举例
$subject = "this is a test";

//正则表达式
$pattern = "/TEST/i";//模式修正符 i
preg_match_all($pattern,$subject,$match);
var_dump($match);