<?php 
//元字符应用举例
$subject = "this is an island";

//正则表达式
$pattern = "/\Bis\b/";//匹配is两边都是非边界
preg_match_all($pattern,$subject,$match);
var_dump($match);