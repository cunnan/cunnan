<?php
header('Content-Type:text/html;charset=utf-8');
//赋值运算符: =
$var = 8;  // 赋值运算符都是右结合:从右往左运算
echo '<br/>';
echo  12 + 7;// 左结合:从左往右运算
echo '<hr/>';
//赋值运算符： += -= *= /= %=
$a = 5;
$a +=7; //+= 效率高   $a = $a +7;效率低
echo $a;
echo '<hr/>';
echo '
	   <ul>
		  <li>one</li>
		  <li>two</li>
		  <li>three</li>
	   </ul>	
	 ';

// .=  字符串累连接
$link =''; //初始值 声明变量
$link .='<ul>'; // $link=$link.'<ul>';
$link .='<li>one</li>';
$link .='<li>two</li>';
$link .='<li>three</li>';
$link .='</ul>';
echo $link;
echo '<hr/>';
$a = 'red';
$b ='green';
$c = 'blue';
$link ='';
$link .= '<ul>';
$link .='<li>'.$a.'</li>';
$link .='<li>'.$b.'</li>';
$link .='<li>'.$c.'</li>';
$link .= '</ul>';
echo $link;













































