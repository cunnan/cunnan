<?php
header('Content-Type:text/html;charset=utf-8');
// 输出  hello-world;
$a = 'hello';
$b ='world';
echo $a,'-',$b; //测试输出
echo '<hr/>';
// 字符(连接)运算符: .
$a = 'hello';
$b ='world';
$link = $a.'-'.$b; //变量整体
echo $link;
echo '<br/>';
// 输出  <h3>星期三</h3> 字符串 赋给变量$link 整体输出
$var ='星期三';
$link = '<h3>'.$var.'</h3>';
echo $link;









