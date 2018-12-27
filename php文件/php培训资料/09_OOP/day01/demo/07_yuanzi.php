<?php 
//原子应用举例
$subject = "this is 
		a test";
$pattern = "/\n/";
preg_match_all($pattern,$subject,$match);
var_dump($match);