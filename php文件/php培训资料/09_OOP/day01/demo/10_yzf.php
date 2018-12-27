<?php 
//元字符应用举例
$subject = "ggle";

//正则表达式
//$pattern = "/go{2}gle/";//限制o出现2次
//$pattern = "/go{1,3}gle/";//限制o最少出现1次，最多出现3次
$pattern = "/go{1,}gle/";
preg_match_all($pattern,$subject,$match);
var_dump($match);