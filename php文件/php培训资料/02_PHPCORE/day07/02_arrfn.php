<?php
header('Content-Type:text/html;charset=utf-8');
/*in_array:判断变量是否是数组的值
  bool in_array(mixed $needle,array $arr
      [,bool $strict=false]);  */
$var = 'a';
$arr = array('a','b','c','d');
var_dump(in_array($var,$arr));
echo '<br/>';
$var = true; //松散比较  true=='a'  -- true
             //严格比较  true==='a' --false 
$arr = array('a','b','c','d');
var_dump(in_array($var,$arr,true));
echo '<hr/>';
// array_key_exists:判断变量是否是数组的键名称
$var ='one';
$arr = array(
  'one'=>'apple',
  'two'=>'orange',
  'three'=>'pear'
);
var_dump(array_key_exists($var, $arr));

echo '<hr/>';
/*    array_push:在当前数组的尾部添加一个或多个成员值,返回新长度
      array_unshift:在当前数组的头部添加一个或多个成员值,返回新长度
      
      array_pop:在当前数组的尾部删除一个成员值，并返回该值
      array_shift:在当前数组的头部删除一个成员值，并返回该值 
 */
$arr = array('a','b','c','d');
echo array_push($arr,'e','f','g');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br/>';
echo array_unshift($arr,'h','i');
echo '<br/>';
echo array_unshift($arr,'j');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br/>';
echo  array_pop($arr);
echo '<br/>';
echo  array_shift($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';






























