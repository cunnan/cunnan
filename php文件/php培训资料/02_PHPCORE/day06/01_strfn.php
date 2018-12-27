<?php
header('Content-Type:text/html;charset=utf-8');
$var = '   AB  ';
echo '#',$var,'#';
echo '<br/>';
echo '#',trim($var),'#';
echo '<br/>';
echo '#',ltrim($var),'#';
echo '<br/>';
echo '#',rtrim($var),'#';
echo '<hr/>';
$var ='.abc.';
echo trim($var,'.');
echo '<br/>';
echo ltrim($var,'.');
echo '<br/>';
echo rtrim($var,'.');
echo '<br/>';
echo '<hr/>';
$str = 'aBbBbBbBcde';
echo strpos($str,'b');//2  区分大小写
echo '<br/>';
echo stripos($str,'b');//1  不区分大小写
echo '<br/>';
echo strrpos($str,'b');//6  最后，区分大小写
echo '<br/>';
echo strripos($str,'b');//7  最后，不区分大小写
echo '<hr/>';

$str = 'aBbBbBbBcde';
echo  strstr($str,'b');//bBbBbBcde      区分大小写
echo '<br/>';
echo  strstr($str,'b',true);//aB      区分大小写
echo '<br/>';
echo  stristr($str,'b');//BbBbBbBcde      不区分大小写
echo '<br/>';
echo  strchr($str,'b');//bBbBbBcde 区分大小写
echo '<br/>';
echo  strrchr($str,'b');//bBcde      最后  区分大小写

echo '<hr/>';
// 字符串反转
$var = 'abc';
echo strrev($var);

echo '<br/>';
$str ='abcbdbebfbg';
// 将 字母 b 替换成 *
echo  str_replace('b',
'<span style="color:red">*</span>',$str);
echo '<br/>';
// 将  字母b c d 替换成 null
$arr = array('b','c','d');
var_dump(str_replace($arr,null,$str,$count));
echo $count; // 获得替换次数

echo '<hr/>';
$str =<<<AA
   D>A B<D
   Tom & Jerry
   he said" I'm fine"
AA;
// 自动将特殊符号转为HTML实体
echo htmlspecialchars($str);
echo '<br/>';
echo htmlspecialchars($str,ENT_QUOTES);

echo '<hr/>';
// 加密函数
$pwd ='123456';
echo md5($pwd);
echo '<br/>';
echo sha1($pwd);
echo '<br/>';
echo  md5(sha1(md5($pwd)));

echo '<hr/>';
// strip_tags:从字符串中去除 HTML 和 PHP 标记
$str ='<span style="color:rgb(89,179,42)">q</span><span style="color:rgb(164,121,77)">v</span><span style="color:rgb(189,80,135)">k</span><span style="color:rgb(45,238,243)">P</span>';
echo strlen($str);
echo '<br/>';
echo strlen(strip_tags($str));
echo '<br/>';
// 保留 a标记
$str ='<div><a href="#">链接</a></div>';
echo strip_tags($str,'<a>');



































































































