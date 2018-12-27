<?php
header('Content-Type:text/html;charset=utf-8');
// (2) $arr[[$key]] =$value;
// 索引数组-- 省略键名称
$arr[] ='a';
$arr[] ='b';
$arr[] ='c';
$arr[] ='d';
echo '<pre>';
print_r($arr);
echo '</pre>';
// 索引数组-- 不省略键名称
$arr = array(); //初始值
$arr[5] ='tom';
$arr[7] ='rose';
$arr[16]='alice';
$arr[7] ='tina';
echo '<pre>';
print_r($arr);
echo '</pre>';
// 关联数组 --第二种定义数组
$arr=array();
$arr['userName']='tom';
$arr['age']=18;
$arr['sex']='男';
$arr['salary']=8888.88;
echo '<pre>';
print_r($arr);
echo '</pre>';
















