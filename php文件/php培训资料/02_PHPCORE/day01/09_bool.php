<?php
header('Content-Type:text/html;charset=utf-8');
//只有 TRUE|true 真 和 FALSE|false假两个值
$var = true;
var_dump($var);
echo '<br/>';
echo $var;  // 1

echo '<br/>';
$var = false;
var_dump($var);
echo '<br/>';
echo $var; // 空字符串 ''