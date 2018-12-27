<?php 
//元字符应用举例
$subject = "mysqoracle";

//正则表达式
//$pattern = "/(s)(q)/";
$pattern = "/mysq(l|o)racle/"; //mysqlracle
                               //mysqoracle
preg_match_all($pattern,$subject,$match);
var_dump($match);