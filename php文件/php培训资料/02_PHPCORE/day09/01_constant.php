<?php
header('Content-Type:text/html;charset=utf-8');
 define('USER','tom');
 //define('USER','rose');//错误 ，常量一旦定义不能修改也就是只能声明一次
 define('ROOT','images/');
 echo USER;
 echo '<br/>';
 echo constant('USER');
 echo '<hr/>';
 //常量是超全局变量，但除了const定义的常量外
 function isTest(){
 	define('PWD','123456');
 }
 isTest();
 echo PWD;
 echo '<hr/>';
 /*2.2系统常量
         a. PHP_INT_MAX 获得整数最大值
         b. PHP_OS 服务器操作系统
         c. PHP_VERSION :PHP版本  */
 echo PHP_INT_MAX;
 echo '<br/>';
 echo PHP_OS;
 echo '<br/>';
 echo PHP_VERSION;
 echo '<br/>';
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 