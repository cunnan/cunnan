<?php
header('Content-Type:text/html;charset=utf-8');
//嵌套循环
// 分析2: 外循环作为轮次,内循环是带循环的小算法
//(1)具体一个数 5！=1*2*3*4*5 阶乘算法
$sum = 1;
for($i=1;$i<=5;$i++){
	$sum *= $i;
}
echo $sum;
echo '<hr/>';
// (2) 求一个范围:1! 2! ...10!所有结果
for($k=1;$k<=10;$k++){
	$sum = 1;
	for($i=1;$i<=$k;$i++){
		$sum *= $i;
	}
	echo $sum.'<br/>';
}
echo '<hr/>';
//  $var =123494321;判断具体一个变量是否是对称的(回文)
$var =12345954321;
$flag = true;
$half = floor(strlen($var)/2);//长度一般确定循环次数
for($i=0;$i<$half;$i++){
	$x =substr($var,$i,1); //  循环截取前一半的每一位
	$y =substr($var,-$i-1,1);//  截取后一半对应的每一位
    //  $x   0   1   2   3  $i
    //  $y   -1 -2 -3   -4  -$i-1
    if($x!=$y){
    	$flag = false;
    	break;
    }
    
}
if($flag){
	echo $var.'是对称';
}else{
	echo $var.'不是对称';
}
echo '<hr/>';
// 输出范围: 10-999 中对称的值
for($k=10;$k<=999;$k++){ //外循环轮次
	$half = floor(strlen($k)/2);
	$flag = true;
	for($i=0;$i<$half;$i++){
		$x = substr($k,$i,1);
		$y = substr($k,-$i-1,1);
		if($x!=$y){
			$flag=false;
			break;
		}
	}
	if($flag){
		echo $k.'是对称<br/>';
	}
	
}












































