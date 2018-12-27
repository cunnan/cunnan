<?php
header('Content-Type:text/html;charset=utf-8');
//错误抑制符: @ 忽略错误,没错误不忽略
$str ='12ab';
@settype($str,'int');
var_dump($str);
echo '<hr/>';
$var = 2;
echo @(11/$var);