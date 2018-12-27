<?php
header('Content-Type:text/html;charset=utf-8');
/*func_num_args:获得函数的参数个数
  func_get_args:获得函数的参数的值所组成的数组
  func_get_arg:获得函数的参数的值所组成的数组的某一个值
  function_exists:判断变量是否是函数  ,返回布尔值
 */
// 封装函数:求两个数的平均值算法   （8+9）/2
//  round(8.9907,2);保留小数点两位
function getAvg($a,$b){
	return round(($a+$b)/2,2);
}
echo getAvg(8,9);

echo '<hr/>';
// 求多个数的平均值
function getAvg2(){
   $count = func_num_args();//获得参数个数
   $arrArgs = func_get_args();//参数值所组成的数组
   //echo func_get_arg(0); //获得数组中的某一个值
   $sum =0; // 参数和
   foreach($arrArgs as $v){
   	  $sum += $v;
   }
   return round($sum/$count,2);//参数和/参数个数
}
echo getAvg2(8,9);
echo '<br/>';
echo getAvg2(8,9,17);
echo '<br/>';
echo getAvg2(8,9,17,28);
echo '<br/>';
echo getAvg2(8,9,17,28,41);

echo '<hr/>';
//function_exists:判断变量是否是函数  ,返回布尔值
var_dump(function_exists('strtolower'));
echo '<br/>';
var_dump(function_exists('getAvg4'));









