<?php 
$subject = array("team","term","time");
//正则表达式
$pattern = "/t/";
$result = preg_grep($pattern,$subject);
var_dump($result);















