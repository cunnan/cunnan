<?php
header('Content-Type:text/html;charset=utf-8');
// 空数组
$arr = array();
echo '<br/>';
// 索引数组 -- 省略键名称
$arr = array('a',20,null,'d');
echo '<pre>';
print_r($arr);
echo '</pre>';
// 索引数组 -- 不省略键名称
$arr = array(
    5 => 'tom',
	7 => 'rose',
	16 =>'alice',
	7 =>'tina'		
);
echo '<pre>';
print_r($arr);
echo '</pre>';
// 关联数组
$arr = array(
   'userName'=>'tom',
   'age' =>18,		
   'sex' =>'男',
   'salary' =>8888.88		
);
echo '<pre>';
print_r($arr);
echo '</pre>';
//  echo 没有返回值void 
//  print_r打印数组   print有返回值 区别





