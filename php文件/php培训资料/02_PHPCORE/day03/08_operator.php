<?php
header('Content-Type:text/html;charset=utf-8');
/*逻辑运算符结果布尔类型
 * && and(与,并且,&&优先级高):第一个表达式和
                 第二个表达式都为真才为真,否则为假
 */
var_dump(
   true  && false, //false
   false && true, //false
   false && false, //false
   true && true,  //true
   7>3 && 6<9 // true
);
echo '<br/>';
/*|| or(或者)：第一个表达式和
        第二个表达式都为假才为假,否则为真
 */
var_dump(
  true || false, // true
  false || true, //true
  false || false, //false
  true || true  // true
);
echo '<br/>';
/*d.xor 异或 ：第一个表达式和第二个
    表达式布尔值不同为真,相同为假  */
var_dump(
true xor false, // true 
false xor true, // true
false xor false, // false
true xor true  //  false
);
echo '<br/>';
// !(非)
var_dump(
 !true, // fasle
 !false, // true
 !5,  // false
 !null // true
);
echo '<hr/>';
/*$var = 7;
 * 判断  $var 是否在 1-10之间(  1<=$var<=10)
 * 如果在 输出  7是 1-10之间的值 
 * 否则  输出    7不是 1-10之间的值
 */
$var = 7;
if($var>=1 && $var<=10){ // 1-10之间条件
	echo $var.'是1-10之间的值';
}else{
	echo $var.'不是1-10之间的值';
}
echo '<br/>';
$var = 7;
if($var<1 || $var>10){ // 不在1-10之间条件
	echo $var.'不是1-10之间的值';
}else{
	echo $var.'是1-10之间的值';
}

echo '<hr/>';
/* && and(与,并且)产生短路：当第一个表达式为假产生短路，那第二个表达式忽略不执行 
   || or(或者)产生短路：当第一个表达式为真产生短路，那第二个表达式忽略不执行   
 *  单分支语句
 *  if(条件){
 *     echo '当条件为真执行的语句组';
 *  }
 *  // 为假跳过if执行后面的顺序语句
 */
$a = 1;
$b = 2;
if($a && $b++){
	$a++;
	$b++;
}
/*  $a && $b++ 没短路
 *  if 条件 -->true 执行if后面的大花括号内容
 *  
 */
echo $a,$b;//2,4
echo '<br/>';
$a = 0;
$b = 2;
if($a && $b++){
	$a++;
	$b++;
}
/*  $a && $b++ 短路   $b++不执行
 *  if 条件 -->false 不执行if后面的大花括号内容
*
*/
echo $a,$b;//0,2
























