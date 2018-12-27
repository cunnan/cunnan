<?php
header('Content-Type:text/html;charset=utf-8');
$float = 12.78;
var_dump($float); 
echo '<br/>';
// 科学计数法  e E
$float = 1.2e2;
var_dump($float);
echo '<br/>';
$float = 1.2e-2;
var_dump($float);
echo '<br/>';
//浮点类型存储的是近似值,所以不要对浮点型进行比较
var_dump((0.7+0.1)*10 == 8);













