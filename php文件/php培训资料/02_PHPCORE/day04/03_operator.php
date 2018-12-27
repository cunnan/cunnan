<?php
header('Content-Type:text/html;charset=utf-8');
/* $a = 7; $b=3;  
 * 如果 $a>$b 那么 $n=1
 * 否则 $n=2;
 * 最后顺序语句中输出 $n的值
 */
$a =7;
$b =3;
if($a>$b){
	$n=1;
}else{
	$n=2;
}
echo $n;
echo '<hr/>';
//三元运算符  :expr1?expr2:epxr3
$a =7;
$b =3;
//$a>$b?$n=1:$n=2;
$n = $a>$b?1:2;
echo $n;
echo '<br/>';
/*PHP5.3以上支持
   expr1?expr1:expr3
*/
$a =7;
$b =3;
$n = $a>$b?:2;
echo $n;








