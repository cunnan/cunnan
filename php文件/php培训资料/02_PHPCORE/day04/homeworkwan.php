<?php
header('Content-Type:text/html;charset=utf-8');
//1. ++(自增,递增) --(自减,递减)运算符
$a = '7z'; //支持自增不支持自减
$b = null; //支持自增不支持自减
$c = true; //不支持自增自减
$d = 6;
$a++;
$b++; // null -->1
$c++;
$b--; // 1 -->0
$c--;
$d = $a +$c +$b++;// 8a + true + 0 =9
$b++;
echo $a,$b,$c,$d;//8a,2,true,9
echo '<hr/>';
//用 .=  输出字符串（赋值给变量$link 整体输出）
$a = 'apple';
$b = 'red';
$c = 'fruits';
$link='';
$link .='<dl>';
$link .='<dt>'.$a.'</dt>';
$link .='<dd>'.$b.'</dd>';
$link .='<dd>'.$c.'</dd>';
$link .='</dl>';
echo $link;
echo '<hr/>';
// 比较运算符
var_dump(
   'good' >'gooc',//true   d>c
   '123' >'5true',//false  1>5   
   'true'>'2e3'//true      t>2 ASCII码值比较  
);
echo '<br/>';
var_dump(
  false >='null',//false    false>=true
  false >='1abc',//false    false>=true
  false >=''//true       false>=false
);
echo '<br/>';
var_dump(
  '5false' >= 5,  //true      5>=5
  'true2' >= 1e2, //false     0>=100
  '-1e2' >= 10   //false      -100>=10
);
echo '<hr/>';
/* 判断  $var ='@163.com'; 邮箱合法性
 * 如果存在 @ 输出  邮箱合法
 * 否则  输出  输出  邮箱不合法
 */
$var ='@163.com';
if(strpos($var,'@')!==false){ //产生错误:0编号自动转为false
	                  //将0 和false区分开
	                  // 0!==false -->true
	                  // 5!==false -->true
	                  // false!==false -->false
	echo '邮箱合法';
}else{
    echo '邮箱不合法';	
}
echo '<br/>';
if(strpos($var,'@')===false){ //产生错误:0编号自动转为false
	//将0 和false区分开
	// 0===false -->false
	// 5===false -->false
	// false===false -->true
	echo '邮箱不合法';
}else{
	echo '邮箱合法';
}
echo '<hr/>';
// 短路问题
$a = 1;
$b = 2;
if($a || $b++){
	  $a++;
	  $b++;
}
/*  $a || $b++    短路  $b++不执行
 *  if 条件 -->true 执行后面大花括号里代码
 */
echo $a,$b;//2,3
echo '<br/>';
$a = 0;
$b = 2;
if($a || $b++){
	  $a++;
	  $b++;
}
/*  
 * $a || $b++    没短路
 *  if 条件 -->true 执行后面大花括号里代码
 */
echo $a,$b;//1,4


























































