<?php 
/*
 * 
   5、将如下字符串按照标点符号进行拆分：
       $subject = "t,h.i;s i:s a t!es?t"
      输出拆分的结果
 */
//正则表达式拆分
$subject = "t3h6is i8s a t0est";
//正则表达式拆分
$pattern = "/\d/"; 
$result = preg_split($pattern,$subject);
var_dump($result);