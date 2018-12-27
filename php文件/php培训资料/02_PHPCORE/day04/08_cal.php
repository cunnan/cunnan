<?php
header('Content-Type:text/html;charset=utf-8');
/* 实现简单的计算器 (+ - * / %) $a + $b
 * 操作数
 * $num1 $num2
 * 运算符(+ - * / %)  
 * $op
 */
// 方法一
$num1 =8;
$num2 =3;
$op ='+';
if($op=='+'){
	echo $num1.'+'.$num2.'='.($num1+$num2);
}elseif($op=='-'){
	echo $num1.'-'.$num2.'='.($num1-$num2);
}elseif($op=='*'){
	echo $num1.'*'.$num2.'='.($num1*$num2);
}elseif($op=='/'){
	echo $num1.'/'.$num2.'='.($num1/$num2);
}elseif($op=='%'){
	echo $num1.'%'.$num2.'='.($num1%$num2);
}else{
	echo '运算符必须是+ - * / %';
}
echo '<hr/>';
// 方法二
$num1 =8;
$num2 =0;
$op ='*';
if($op=='+'){
	$result = $num1 +$num2;
}elseif($op=='-'){
	$result = $num1 -$num2;
}elseif($op=='*'){
	$result = $num1 *$num2;
}elseif($op=='/'){
	$result = $num1 /$num2;
}elseif($op=='%'){
	$result = $num1 %$num2;
}else{
	die('运算符必须是+ - * / %');
}
echo $num1.$op.$num2.'='.$result;
/* echo :向浏览器输出一个或多字符串
 * die(),exit():报错输出,后面代码停止执行 
 */
echo '<hr/>';
/* 要求: 
 *  1. $num1,$num2 必须是数值 is_numeric
 *  2. 除法运算:$num2 除数不能为0
 */
$num1 ='8';
$num2 =0;
$op ='/';
if(is_numeric($num1)&& is_numeric($num2)){
	if($op=='+'){
		$result = $num1 +$num2;
	}elseif($op=='-'){
		$result = $num1 -$num2;
	}elseif($op=='*'){
		$result = $num1 *$num2;
	}elseif($op=='/'){
		if($num2!=0){
			$result = $num1 /$num2;
		}else{
			die('除数不能为0');
		}
	}elseif($op=='%'){
	    if($num2!=0){
			$result = $num1 %$num2;
		}else{
			die('除数不能为0');
		}
	}else{
		die('运算符必须是+ - * / %');
	}
}else{
	die('操作数必须是数值');
}
echo $num1.$op.$num2.'='.$result;

















