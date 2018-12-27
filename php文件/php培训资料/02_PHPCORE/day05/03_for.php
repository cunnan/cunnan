<?php
header('Content-Type:text/html;charset=utf-8');
/* echo 'hello world<br/>';
echo 'hello world<br/>';
echo 'hello world<br/>'; */
for($i=1;$i<=3;$i++){
	echo 'hello world<br/>';
}
/* 无条件执行一次   $i=1
 * $i<=3   --true 
 * 输出echo 'hello world<br/>'
 * $i++    -- $i=2
 * $i<=3   --true 
 * 输出echo 'hello world<br/>'
 * $i++    -- $i=3
 * $i<=3   --true 
 * 输出echo 'hello world<br/>'
 * $i++    -- $i=4
 * $i<=3   --false 结束循环 
 */
echo $i;
echo '<br/>';
//  输出 3次  happy  要求:$i=5 ?  $i++ 
for($i=5;$i<=7;$i++){
	echo 'happy<br/>';
}
echo $i;
echo '<br/>';
//  输出 3次  good  要求:$i=5 ?  $i--
for($i=5;$i>=3;$i--){
	echo 'good<br/>';
}
echo $i;
echo '<hr/>';
//有变量的输出
// 1-10
for($i=1;$i<=10;$i++){
	echo '第'.$i.'行<br/>';
}
// 用循环  h1-h6 的标题字
for($i=1;$i<=6;$i++){
   echo '<h'.$i.'>标题值</h'.$i.'>';
}
// 用循环<font size="1~7">文本标记</font>
for($i=1;$i<=7;$i++){
	echo '<font size="'.$i.'">文本标记</font><br/>';
}
echo '<br/>';
// 用循环7次  <p style="color:rgb(255,0,0)">段落</p>
// 随机产生颜色 mt_rand(0,255)
for($i=1;$i<=7;$i++){
	//echo '<p style="color:rgb(255,0,0)">
	//       段落</p>';
	echo '<p style="color:rgb('
		 .mt_rand(0,255).','
		 .mt_rand(0,255).','
		 .mt_rand(0,255).')">段落</p>';
}
echo '<hr/>';
// 用条件或 步长控制输出
//  输出 1-10的偶数
for($i=1;$i<=10;$i++){
	if($i%2==0){
	  echo $i.'<br/>';
	}
}
echo '<br/>';
//  输出 1-10的奇数
for($i=1;$i<=10;$i++){
	if($i%2!=0){
	   echo $i.'<br/>';
	}
}
echo '<br/>';
for($i=1;$i<=10;$i+=2){
	echo $i.'<br/>';
}
echo '<hr/>';
/* (1) 3 8 13 18 23 28 33 38 43 
 * (2) 2 4 8 16 32 64 128 256
 * (3) 输出  1-100中能别  3 和 7 同时整除的数
 */
for($i=3;$i<=43;$i+=5){
	echo $i.'<br/>';
}
for($i=2;$i<=256;$i*=2){
	echo $i.'<br/>';
}
for($i=1;$i<=100;$i++){
	if($i%3==0 && $i%7==0){
	echo $i.'<br/>';
	}
}

// 累加算法  1-100 的和 5050
$sum = 0;
for($i=1;$i<=100;$i++){
	$sum += $i;
}
echo $sum;
/*  $sum =0;
 *  $sum = $sum +   $i;
 *    1   =   0   +  1
 *    3   =   1   +  2
 *    6   =   3   +  3
 *    10  =   6   +  4
 *    ...  
 */
echo '<br/>';
//  阶乘    5！ = 1*2*3*4*5
$sum = 1;
for($i=1;$i<=5;$i++){
	$sum *= $i;
}
echo $sum;

























































































