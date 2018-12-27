<?php
header('Content-Type:text/html;charset=utf-8');
//自动转换--其它类型转为字符类型
// 拿  echo 举例 --在输出之前将其他类型转为字符类型
//a.整型和浮点转为字符类型就是该数值本身
echo 17;  // '17'
echo '<br/>';
echo 19.34; // '19.34'
echo '<hr/>';
// b.布尔类型 true转为 '1',false转为 空字符串
$var = true;
echo $var;  // '1'
$var = false;
echo $var; // 空字符串
echo '<hr/>';
// c.null 转为 空字符串
echo  '#',true,null,false,'#';
echo '<br/>';
echo '#','true',2e2,'#';
echo '<br/>';
echo '#','true','2e2','#';
echo '<hr/>';
/*
 * d.数组转为 字符类型   'Array'
   e.资源转为 字符类型   'Resource id #数字'
 */
$arr = array('a','b','c','d');
echo $arr; // 'Array' 错误的
echo $arr[2]; // 输出数组中的默认一个值 c
echo '<br/>';
$handle = fopen('01_string.php','r');
echo $handle;









