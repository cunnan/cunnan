<?php
header('Content-Type:text/html;charset=utf-8');
/* 静态变量:static,用在函数中，调用函数时
                                    不释放内存，能存储变量的最后值，
                                    一般函数中的实现累加计数  
 * 
 */
function  fn1(){
    $a = 0; // 局部变量:动态变量
    $a++;
    echo $a;	
}

fn1();
echo '<br/>';
fn1();
echo '<br/>';
fn1();
echo '<hr/>';

function  fn2(){
	static $a = 0; // 局部变量:静态变量
	$a++;
	echo $a;
}

fn2();
echo '<br/>';
fn2();
echo '<br/>';
fn2();
echo '<br/>';







