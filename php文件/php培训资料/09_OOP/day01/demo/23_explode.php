<?php 
//普通字符串的分隔函数 explode
/*
 * 4、应用函数explode对字符串subject按照字母t进行拆分。
 * 打印出拆分的结果
    
   $subject = "this is a test"
 */
$subject = "this is a test";
$delimiter = " ";
$result = explode($delimiter,$subject,2);
var_dump($result);















