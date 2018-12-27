<?php
header('Content-Type:text/html;charset=utf-8');
// 自动转换(隐式转换) --其它类型转为整型或浮点型
// 拿加法举例
/*
 *  a.合法的数字字符串如果没有 . e E并且没有
                    超出整型最大值那转为整型，否则转为浮点
*/
echo 8 + '13';//21
echo '<br/>';
echo 8 + '3.76';//11.76
echo '<br/>';
echo 8 + '1e2';// 8+100=108
echo '<br/>';
/*b.不合法的数字字符串,如果以数值开头那转为
        该数值,如果以字母开头转为0. 
 */
echo 8 + '3ok';//11
echo '<br/>';
echo 8 + '2e2abc';//208
echo '<br/>';
echo 8 + 'e3ok';// 8+0
echo '<br/>';
echo 8 +  '3.5.6.7.8.9.2';//11.5

echo '<hr/>';
/*c.布尔值 true 转为 1,false 转为 0
  d. null 转为 0
  e. 空字符串转为 0
 */ 
echo 12.5 + '' + null + true + '8true';
//   12.5 +0 +0 +1 +8 = 21.5
echo '<br/>';
echo 12.5 + 'true99' + '5false' + 'e3true';
//   12.5 + 0 + 5 + 0 = 17.5
echo '<br/>';
echo 12.5 + '-3.9.7.5.54' + '3.5null';
//   12.5 -3.9 +3.5 = 12.1



















