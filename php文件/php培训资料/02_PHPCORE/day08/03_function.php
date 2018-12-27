<?php
header('Content-Type:text/html;charset=utf-8');
//(7)变量函数:将函数名称赋值给变量,而使用变量时带
  //小括号,PHP引擎能正常解析函数
// 将变量 $str 转为小写 
$str = 'hELLo';
echo  strtolower($str);
echo '<br/>';
$str = 'hELLo';
$fn = 'strtolower'; //变量函数
echo $fn($str);
echo '<hr/>';
/*array_map:将回调函数作用到数组的每个单元上
 * array  array_map(callback $call,array $arr) 
 **/
/* 封装 将回调函数作用到数组的每个单元上
 * @param  callback $fn  回调函数类型
 * @param  array $arr
 * @return  array
 *     function_exists 判断变量是否是函数，返回布尔
 */
function arrayMap($fn,$arr){
   foreach($arr as $v){
   	   //$newarr[] =$fn($v); // 变量函数
   $newarr[] = function_exists($fn)?$fn($v):$v;
   }	
   return $newarr;
}
$arr = array('3dfRe','2dfEd','4YUab');
$newarr = arrayMap('strtolower',$arr);
echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br/>';
// 返回数组中每个值的平方
$arr = array('3dfRe','2dfEd','4YUab');
$newarr = arrayMap('pingfang',$arr);
function pingfang($n){
	return $n*$n;
}
echo '<pre>';
print_r($newarr);
echo '</pre>';



















