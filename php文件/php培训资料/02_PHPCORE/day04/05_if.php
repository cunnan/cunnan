<?php
header('Content-Type:text/html;charset=utf-8');
//if单分支语句
$var = 5;
if($var>9){ 
  echo 'hello world<br/>';
  echo 'good<br/>';
}
echo 'ok';
echo '<hr/>';
/*b.如果if后面大花括号里代码只有一条语句
        可以省略{},推荐不省略
 */
if($var>9)
	echo 'hello world<br/>';

echo 'good<br/>';//顺序语句
echo 'ok';

echo '<hr/>';
/* $a =7; $b =5;
 * 如果条件 $a>$b 为真 那么执行 $n=1
 * 否则  执行  $n=2
 * 最后在顺序语句中输出 $n的值
 */
$a = 7;
$b = 5;
if($a>$b){
	$n = 1;
}else{
	$n =2;
}
echo $n;

echo '<hr/>';
// =赋值运算符   ==比较运算符 的区别
$a = 0;
if($a==0){ // $a值 和 0比较
   echo 'good';		
}
echo '<br/>';
if($a=0){ // 将 0 赋值给 $a --总是false
	echo 'good';
}
echo '<br/>';
if($a=5){ //将 5 赋值给 $a --总是true
	echo 'good';
}














































