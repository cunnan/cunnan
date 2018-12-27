<?php 
//元字符应用举例
$subject = "google";

//正则表达式
//$pattern = "/go*gle/";//字母o可以出现0次或者多次
//$pattern = "/go+gle/";//字母o可以出现1次或者多次
$pattern = "/go?gle/";//字母o可以出现0次或者1次
preg_match_all($pattern,$subject,$match);
var_dump($match);