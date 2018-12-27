<?php 
//元字符应用举例
$subject = "this is a tesabct";

//正则表达式
//$pattern = "/\Aabc/";//^或者 \A 要求以abc作为字符串起始
$pattern = "/abc\Z/"; //要求字符串以abc为结尾
preg_match_all($pattern,$subject,$match);
var_dump($match);