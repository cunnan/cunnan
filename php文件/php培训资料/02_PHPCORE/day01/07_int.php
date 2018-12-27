<?php
header('Content-Type:text/html;charset=utf-8');
echo -13;
echo '<br/>';
echo 22;
echo '<br/>';
// 整型最大值
echo PHP_INT_MAX;
echo '<hr/>';
// 如果超出整型最大值产生溢出
$int = 2147483647;
var_dump($int);
echo '<br/>';
$int = $int +1;
var_dump($int);
echo '<hr/>';
//  二进制 (0 1): '0b'开头
$var = 0b0111;
echo $var;
/* 二进制转为十进制(从右往左) 2^0=1
 *  0b0111 = 1*2^0 + 1*2^1 + 1*2^2 + 0*2^3= 7
 *  123 = 3*10^0 + 2*10^1 +1*10^2 = 123
 */
echo '<br/>';
//八进制(0-7): '0'开头
$var = 056;
echo $var;
/*  056 = 6*8^0 + 5*8^1 =46*/
echo '<br/>';
// 十六制(0-9 a b c d e f) '0x'开头
$var = 0x123;
echo $var;
/*  0x123 = 3*16^0 + 2*16^1 +1*16^2 =3+32+256=291*/














