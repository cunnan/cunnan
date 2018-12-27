<?php
header('Content-Type:text/html;charset=utf-8');
// 强制转换--临时转换 (变量本身没变化)
/*a.整型  (integer)$var|(int)$var
        b.浮点型 (float)$var |(double)$var|(real)$var
        c.布尔型  (boolean)$var| (bool)$var
        d.字符类型  (string)$var
        e.数组       (array)$var
        f.对象       (object)$var
        g.null类型  (unset)$var  */

$int = 15;
$float = 4.78;
$bool = true;
$str = 'hello';
// 将 $float 转为 整型 ,向下取整
var_dump((int)$float);
echo '<br/>';
var_dump((integer)$float);
echo '<br/>';
var_dump($float);// 变量本身未发生变化
echo '<br/>';
// 将 $str 转为数组类型
var_dump((array)$str);
echo '<br/>';
var_dump($str);
echo '<hr/>';
/*        整数 intval($var)
                     浮点型 floatval($var)|doubleval($var)
                     布尔类型 boolval($var)--PHP5.5以上支持
                     字符类型 strval($var)  
 */
// 将 $int 转为浮点型
var_dump(floatval($int));
echo '<br/>';
var_dump(doubleval($int));
echo '<br/>';
var_dump($int); //变量本身未发生变化



















