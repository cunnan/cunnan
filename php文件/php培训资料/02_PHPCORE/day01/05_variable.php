<?php
//(1)多个变量赋相同的值
$a = $b = $c = $d = 12;
echo $a,$b,$c,$d;
echo '<hr/>';
//(2)可变变量
$a = 'b';
$b = 'c';
$c = 'd';
$d = 'e';
echo $$$$a; // e
echo '<br/>';
$hello ='world';
$world = 'good';
$good = 'ok';
echo $$$hello; //ok
echo '<br/>';
//(3)引用变量：& ,给变量起别名,变量名称和别名指向同一个内存地址
$a = 30;
$b = &$a;
$b = 15;
echo $a;//15
























