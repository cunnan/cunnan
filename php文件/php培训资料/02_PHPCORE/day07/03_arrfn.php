<?php
header('Content-Type:text/html;charset=utf-8');
/* array_map:将回调函数作用到给定数组的单元上 
      格式:array array_map ( callable $callback ,
        array $arr1 [, array $... ] )      
     回调函数类型:一个函数的名称作为另一个函数的参数使用.
  */
// 将数组中的每个值  转为大写字母 strtoupper
$arr = array('hELLo','gooD','haPPy');
$newarr = array_map('strtoupper',$arr);
echo '<pre>';
print_r($newarr);
echo '</pre>';
// 不用array_map  实现
foreach($arr as $k=>$v){
	$newarr2[] = strtoupper($v);
}
echo '<pre>';
print_r($newarr2);
echo '</pre>';












