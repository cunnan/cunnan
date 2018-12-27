<?php
header('Content-Type:text/html;charset=utf-8');
// 循环输出1-5 值
for($i=1;$i<=5;$i++){
	echo $i.'<br/>';
}
echo '<br/>';
// 省略for中第一个表达式
$i =1;
for(;$i<=5;$i++){
	echo $i.'<br/>';
}
echo '<br/>';
// 省略for中第一个表达式和第二个表达式
$i =1;
for(;;$i++){
	if($i>5){
		break;
	}
	echo $i.'<br/>';
}
echo '<br/>';
// 省略for中第一个表达式和第二个表达式和第三个表达式
$i =1;
for(;;){
	if($i>5){
		break;
	}
	echo $i.'<br/>';
	$i++;
}
echo '<hr/>';
for($a=1,$b=2,$c=3;$b<=8,$c<=20,$a<=3;
    $a++,$b*=2,$c+=3){
	echo $a.'---'.$b.'---'.$c.'<br/>';
}
/* 循环次数  3遍
 *  $a  $b  $c 
 *   1   2   3
 *   2   4   6
 *   3   8   9
 */
echo '<br/>';
for($a=3,$b=4,$c=5;$a<=5,$b<=10,$c<=60
     ;$a++,$b+=2,$c*=3){
    echo $a.'---'.$b.'---'.$c.'<br/>';
}
/* 
 *   $a  $b  $c 
 *   3   4     5
 *   4   6     15
 *   5   8     45
 */




















