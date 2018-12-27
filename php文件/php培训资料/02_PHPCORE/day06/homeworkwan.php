<?php
header('Content-Type:text/html;charset=utf-8');
/*1.用条件和步长控制输出
*   (1) 3 6 9 12 15 18 21
*   (2) 1 4 9 16 25 36 49
*   (3) 输出  1-100 中能被  5或 6整除的数
*   (4) 输出  1-100 能被7整除 或 十位上是7 或 个位上是7的数
*/
for($i=3;$i<=21;$i+=3){
	echo $i.'<br/>';
}
echo '<br/>';
for($i=1;$i<=7;$i++){
	echo $i*$i.'<br/>';
}
echo '<hr/>';
for($i=1;$i<=100;$i++){
	if($i%5==0 || $i%6==0){
	  echo $i.'<br/>';
	}
}
echo '<hr/>';
for($i=1;$i<=100;$i++){
	if($i%7==0 || $i/10%10 ==7 || $i%10==7){
		//  71/10 = 7.1  整数余数 7%10= 7
		//  72/10 = 7.2
		//  73/10 = 7.3
		//  17%10 = 7
		//  27%10 =7
		echo $i.'<br/>';
	}
}
echo '<hr/>';
//  累连
$link ='';
$link .='<ul>';
for($i=1;$i<=6;$i++){
	$link.='<li>'.$i.'</li>';
}
$link .='</ul>';
echo $link;
echo '<hr/>';
for($i=15;$i<=25;$i++){
	echo '<p style="font-size:'.$i.'px">段落</p>';
}









































