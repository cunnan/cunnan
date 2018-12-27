<?php
header('Content-Type:text/html;charset=utf-8');
/*i. is_numeric 检测变量是否数值(整数,浮点,合法的数字字符串)
   j. is_scalar 检测变量是否是标量(整型,浮点型,布尔,字符型)
 * 
 */
$int = 12;
$float = 14.78;
$bool = true;
$str1 = 'hello';
$str2 = '3.6';
$str3 = '4.67.87.8.89';
$arr = array('a','b');
var_dump(is_numeric($int)); //true
echo '<br/>';
var_dump(is_numeric($float));//true
echo '<br/>';
var_dump(is_numeric($bool));//false
echo '<br/>';
var_dump(is_numeric($str1));//false
echo '<br/>';
var_dump(is_numeric($str2));//true
echo '<br/>';
var_dump(is_numeric($str3));//false
echo '<hr/>';
var_dump(is_scalar($int));//true
echo '<br/>';
var_dump(is_scalar($arr));//false


