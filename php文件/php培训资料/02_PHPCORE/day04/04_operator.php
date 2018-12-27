<?php
header('Content-Type:text/html;charset=utf-8');
$a = 5;
$b = 9;
if($a>3 && $b++){
    $a++;
    $b++;
}
/* $a>3 && $b++  没短路
 * if -->true 执行if后面的大花括号
 */
echo $a,$b;//6,11
echo '<hr/>';

$a = 6;
$b = 7;
if($a=(1 || $b++)){
  $a++;	
  $b++;	
}
/* 1 || $b++  短路  $b++不执行一次  
 * $a = true
 * if -->true 执行if后面的大花括号
 * 布尔值不支持自增自减
 */
echo $a,$b;// true,8
echo '<br/>';
$x = 1;
$y = 2;
$z = 3;
if($x = 6 && $y =7 || $z=9){
	$x++;
	$y++;
	$z++;	
}
/* (1) 6 && $y =7 || $z=9 没短路
 * (2) 7 || $z=9  短路  $z=9 不执行
 * (3) $y = true
 * (4) $x = 6&&true =true
 * (5) if条件-->true 执行if后面的大花括号代码
 * (6) 布尔不支持自增自减
 */
echo $x,$y,$z;// true,true,4














