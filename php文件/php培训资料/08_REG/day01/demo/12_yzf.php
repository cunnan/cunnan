<?php 
//元字符应用举例
$subject = "mysql or oracle";

//正则表达式
$pattern = "/mysql|oracle/";// |
preg_match_all($pattern,$subject,$match);
var_dump($match);