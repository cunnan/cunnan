<?php 
//原子应用举例-自定义原子表
$subject = "TH5I584S IS A TEST";
//$pattern = "/[thi]/";//匹配subject中的字母 t h i
//$pattern = "/[a-zA-Z0-9 ]/";//匹配subject中所有的
                            //小写26个英文字母，大写26个英文字母
                            //所有的数字
$pattern = "/[^a-z]/";                              
preg_match_all($pattern,$subject,$match);
var_dump($match);