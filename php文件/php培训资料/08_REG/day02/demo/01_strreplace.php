<?php 
header("Content-Type:text/html;charset=utf-8");
//普通字符串处理函数，字符串的替换
$subject = "疯子说下半年是雾霾天"; //专家说下半年是晴天

$search = array("疯子","雾霾");
$replace = "**";

echo str_replace($search,$replace,$subject);