<?php
header('Content-Type:text/html;charset=utf-8');

require_once 'libs/smarty.class.php';

//这个文件是入口文件

$b = $_GET['b']; //news users default

$c = $_GET['c'];

if($b ==''){
	$b = 'Index';
}
$b = ucfirst(strtolower($b)) . 'Controller';

//这是调哪个文件
$classFile = 'business/' . $b . '.class.php';

if(!file_exists($classFile)){
	$classFile = 'business/ErrorController.class.php';
	$b = 'ErrorController';	
}

require_once $classFile;
//实例化对象
$object = new $b;
//这是调哪个方法
if($c == ''){
	$c = 'init';
}
if (!method_exists($object,$c)) {
    $c = 'index';	
}
$object -> $c();





 

