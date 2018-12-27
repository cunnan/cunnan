<?php
header('Content-Type:text/html;charset=utf-8');
//想使用class1/Test.class.php-fun1 class2/Test.class.php-fun2
require 'class1/Test.class.php';//test class1
require 'class2/Test.class.php';//test class2
$ob=new \home\class1\Test();
var_dump($ob->fun1());
$ob1=new \home\class2\Test();
var_dump($ob1->fun2());