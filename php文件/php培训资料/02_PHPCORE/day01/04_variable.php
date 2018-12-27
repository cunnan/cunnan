<?php
header('Content-Type:text/html;charset=utf-8');
/* echo 'hello world<br/>';
echo  'good<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello<br/>'; */
$var = 'hello world<br/>';
echo $var;
echo 'good<br/>';
echo $var;
echo $var;
$var = 'happy<br/>';
echo $var;
/*1. 判断下面的变量名称是否正确  
 * test
 * $te/st
 * $1test
 * $tes t
 * $test123
 * $te&st
 * 
 *2.声明变量
 * (1)用户名  userName 值 张三
 * (2)性别     sex   值  男
 * (3)年龄     age   18
 * (4)地址    addr   北京
 * (5)薪水    salary  8888.88
 * 并且 输出 变量值
 */
$test123;
echo '<br/>';
$userName = '张三';
$sex = '男';
$age = 18;
$addr = '北京';
$salary = 8888.88;
echo $userName,'<br/>',$sex,'<br/>'
	,$age,'<br/>',$addr,'<br/>',$salary;
/* 变量名称区分大小写   变量名称相同后面的值覆盖前面的值 */
$userName = '李四';
$UserName = '赵五';
echo  $userName;//李四
echo '<br/>';
$var12 = 7;
$var12 = $var12 + 10;
echo $var12;



























