<?php
header('Content-Type:text/html;charset=utf-8');
// 空数组
$arr = array();
// 有成员值数组
$arr = array('a','b','c','d');
//var_dump($arr);
print_r($arr); //打印所有数组中的值
echo '<br/>';
echo $arr[2]; // 输出数组中的某一个值
echo '<hr/>';
// 对象类型(Object) 
$obj = new stdClass();
var_dump($obj);
echo '<hr/>';
// 资源类型(Resource)
$handle = fopen('01_string.php','r');
var_dump($handle);
echo '<hr/>';
// NULL类型
//a.声明变量并赋NULL值
$null = NULL;
var_dump($null);
echo '<br/>';
//b.声明变量但未赋值
$null2;
var_dump($null2);
//c.unset函数删除变量中的值
$str ='ok';
unset($str);
var_dump($str);
/*a.display_errors = On
 b.error_reporting =E_ALL (显示所有错误,推荐)   
 error_reporting = E_ALL&~E_NOTICE
  显示所有错误除了通知错误  */

















