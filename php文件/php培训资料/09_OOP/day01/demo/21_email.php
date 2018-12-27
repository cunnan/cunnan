<?php 
/*
 * 3、写一个正则表达式，匹配邮箱地址
      $email = "123456@qq.com"
      $email = "tom@163.com" 
      $email = "tom.tailor@163.com" 
      $email = "tom-tailor@163.com"  
 */

//$subject = "tom@163.com";
//$subject = "tom.tailor@163.com";
$subject = "tom-tailor@163.com";
//正则表达式
$pattern = "/^[0-9a-z]+([\.\-\_][a-z0-9]+)?@[a-z0-9]+\.(com|cn|org|net|com\.cn)$/i";

var_dump(preg_match_all($pattern,$subject,$match));
var_dump($match);















