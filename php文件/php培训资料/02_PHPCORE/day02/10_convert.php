<?php
header('Content-Type:text/html;charset=utf-8');
// 永久转换
/*a. settype:设置变量类型
   bool settype ( mixed &$var , string $type )
 * 成功返回true 失败返回 false
 */
//函数调用
// 将变量转为  整型
$float = 14.78;
settype($float,'int');
var_dump($float); //变量本身发生变化了
echo '<br/>';
//  查手册 : gettype:  获得 $float 的类型
// string gettype($var)
echo gettype($float);








