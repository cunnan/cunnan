<?php 
header("Content-Type:text/html;charset=utf-8");
//查找下面字符串中的 HTML标签，替换掉所有的HTML标签
 //$subject = 
// "我是一个含有<span style='color:red;'>HTML</span>标签的<b>字符</b>串
$subject ="我是一个含有<span style='|color:red;'>HTML</span>标签的<b>字符</b>串";

//正则表达式 匹配HTML标签
$pattern = "/<\/?[a-z0-9]+[\sa-z0-9=':;\"]*>/i";
//$pattern = "/<[^<>]+>/";
$replace = "";
echo preg_replace($pattern,$replace,$subject);











