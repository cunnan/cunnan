<?php
header('Content-Type:text/html;charset=utf-8');
/* PHP是弱类型语言：  数据类型与赋值有关（瓶子:酒瓶,醋瓶...）
 * c,java是强类型语言:必须声明数据类型  int age=18;（酒瓶）
 */
$userName = '张三';
$sex = '男';
$age = 18;
$addr = '北京';
$salary = 8888.88;
$married = true; // true真   false假
var_dump($userName,$sex,$age,$addr
         ,$salary,$married);