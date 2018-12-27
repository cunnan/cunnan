<?php
header('Content-Type:text/html;charset=utf-8');
/* 前缀形式: 变量自身先加1或减1,后执行语句
      后缀形式: 先执行语句,变量自身后加1或减1 
 */
$a = 5;
$b = 9;
echo ++$a; //6
echo '<br/>';
echo $b++; //9
echo '<br/>';
echo $b; //10
echo '<hr/>';
$a = 3;
$b = 5;
$a++;
$c = $b++;
echo $a,$b,$c;//4,6,5
echo '<hr/>';
$x = 9;
$y = 6;
$x--;
$y--;
$x--;
$z = $y--;
echo $x,$y,$z;//7,4,5

echo '<hr/>';
//(b) 布尔类型是否支持自增和自减--不支持自增和自减
$var = true;
echo ++$var;//true--1
echo '<br/>';
$var = false;
echo --$var;//空字符串
echo '<hr/>';
//(c) null 是否支持自增和自减？--支持自增不支持自减
$var = null;
echo ++$var;//1 --支持自增
echo '<br/>';
$var = null;
echo --$var; //空字符串 --不支持自减
echo '<hr/>';
//(d) 字符类型(纯字母)是否支持自增和自减？
/*  $var ='a';
 *  ord :将字符转为ASCII码值
 *  echo ord($var); --> 97
 *  chr:将ASCII码值转为字符
 *  echo chr(98)  --> b */
$var ='a';
echo ++$var; // b --支持自增
echo '<br/>';
$var = 'c';  // c --不支持自减
echo --$var;
echo '<br/>';
$var ='z';
echo ++$var; //aa
echo '<br/>';
$var ='Z';   //AA
echo ++$var;
echo '<br/>';
$var ='9z';   //10a
echo ++$var;
echo '<br/>';
$var ='z9';   //aa0
echo ++$var;

echo '<hr/>';

$a = 5;
$b = true; //布尔不支持自增自减
$c = null; //null支持自增不支持自减
$d = 12;
$a++;
$b++;
$c--;
$c--;
$d = $a +$b + $c++;// 6+true + null
echo $a,$b,$c,$d;//6,true,1,7

































