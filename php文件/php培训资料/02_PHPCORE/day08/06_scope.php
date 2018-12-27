<?php
header('Content-Type:text/html;charset=utf-8');
//局部变量:只在代码段中有效
//a.动态变量
$n = 7;
function isTest(){
	$n = 12;//局部变量
}
isTest();
echo $n;
echo '<br/>';
$n = 7;
function isTest2($n){//形参:值传递局部变量
	$n +=9;
	//return $n;
}
isTest2($n);//实参
echo $n;
echo '<br/>';
$n = 7;
function isTest3(){
	global $n;
	$n = 12;//全局变量
}
isTest3();
echo $n;
echo '<br/>';
$n = 7;
function isTest4(){
  $GLOBALS['n'] = 12;//全局变量
}
isTest4();
echo $n;
echo '<br/>';
$n = 7;
function isTest5(&$n){//形参:引用传递全局变量
	$n +=9;
	//return $n;
}
isTest5($n);//实参
echo $n;
echo '<hr/>';
// 引用变量
$a = 20;
$b = &$a;
$b = 11;
echo $a;














