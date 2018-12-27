<?php
header('Content-Type:text/html;charset=utf-8');
//这个文件是入口文件

$b = $_GET['b'];

$c = $_GET['c'];

if($b ==''){
	$b = 'default';
}

//这是调哪个文件
require_once 'business/' . $b . '.php';

//这是调哪个函数

if($c == ''){
	$c = 'init';
}
$c();








 





