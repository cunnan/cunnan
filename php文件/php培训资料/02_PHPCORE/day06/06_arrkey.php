<?php
header('Content-Type:text/html;charset=utf-8');
/*(1)数组中出现的第一个省略键名称,而它之前的
                数组成员的键名称都是负值，该键名称为0
*/
$arr = array(
   -1 =>'a',
   -20 =>'b',
   -7 =>'c',		
   'd', // 0
   'e'  //1
);
echo '<pre>';
print_r($arr);
echo '</pre>';
/*  (2)数组中出现的第一个省略键名称,而它之前的
                数组成员的键名称有正值和负值，该键名称为
                最大值加1
 */
$arr = array(
		11 =>'a',
		20 =>'b',
		-7 =>'c',
		'd', // 21
		'e'  // 22
);
echo '<pre>';
print_r($arr);
echo '</pre>';
//(3)数组中键名称如果是浮点型,转为整型，下向取整
$arr = array(
		11 =>'a',
		20 =>'b',
		1.9 =>'c',

);
echo '<pre>';
print_r($arr);
echo '</pre>';

/*(4)数组中键名称合法整数数字符串转为整型，
                合法浮点数字符串该字符串
 * 
 */
$arr = array(
		11 =>'a',
		'13' =>'b',
		'1.9' =>'c',

);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br/>';
/*(5)数组中键名称 布尔值，true 转为1,false
                转为0
  (6)数组中键名称 null 转为空字符串  */
$arr = array(
		true =>'a', // [1]
		false =>'b', // [0]
		'true' =>'c', //[true]
		null =>'d',  // ['']
		'' =>'e'     // ['']

);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<br/>';

echo '<hr/>';
$arr = array(
   'a',  // [0]
   'b',  // [1]
    0=>'c', //[0]
	1=>'d',  //[1]
	1.9=>'e', //[1]
	'1.9'=>'f',//[1.9]
    true =>'g', //[1]
	false =>'h', //[0]
    null =>'i',  //['']
	'' =>'j',    //['']
	'true'=>'k', //['true']
	'l',         //[2]
	'm'		     //[3]
);
echo '<pre>';
print_r($arr);// h g f j k l m
echo '</pre>';
echo '<br/>';































