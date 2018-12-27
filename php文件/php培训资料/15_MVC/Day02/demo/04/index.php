<?php
header('Content-Type:text/html;charset=utf-8');

require_once 'libs/smarty.class.php';

//echo 'Apache的主目录' , $_SERVER['DOCUMENT_ROOT'] , '<br><br>';

//这个文件是入口文件

$pathinfo = substr($_SERVER['PATH_INFO'],1);

$array = explode('/',$pathinfo);

for ($i=0;$i<count($array);$i+=2){
	$pathinfoArray[$array[$i]] = $array[$i+1];
}
$b = $pathinfoArray['b']; //news users default
$c = $pathinfoArray['c'];

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
	$c = 'index';
}
if (!method_exists($object,$c)) {
    $c = 'index';	
}
$object -> $c();





 

