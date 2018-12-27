<?php
header('Content-Type:text/html;charset=utf-8');
$varab = 'tom';
// 输出结果 : tomcedfg
echo "{$varab}cedfg";
echo '<hr/>';
//b.用{}对变量中的某一个值实现增删改查.
// (a) 可以用[]代替{},编号从0开始
$var ='abcdefg';
// 获得字母 e(查)
echo $var{4};
echo '<br/>';
// 获得字母 g(查)
echo $var{6};
echo '<br/>';
//修改字母  d 为  z(改)
$var{3} = 'zyyyy';
echo $var;
echo '<br/>';
//在$var值的最后添加字母 w(增)
$var{7} = 'wyyyyy';
echo $var;
echo '<br/>';
// 删除$var 中字母a(删) ''空字符   '     '带空格字符串
$var{0} ='';
var_dump($var);







