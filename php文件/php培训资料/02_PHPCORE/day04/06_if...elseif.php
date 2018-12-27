<?php
header('Content-Type:text/html;charset=utf-8');
//多分支语句
$week = 4; // 0-6 0代表星期日
if($week==0){
	echo '星期日';
}elseif($week==1){
	echo '星期一';
}elseif($week==2){
	echo '星期二';
}elseif($week==3){
	echo '星期三';
}elseif($week==4){
	echo '星期四';
}elseif($week==5){
	echo '星期五';
}elseif($week==6){
	echo '星期六';
}else{
	echo '超出范围';
}
echo '<hr/>';
/*  $day = 15; 
 *  如果$day 在 1-10   那么输出 上旬
 *  如果$day 在 11-20  那么输出 中旬
 *  如果$day 在 21 -31 那么输出 下旬
 *  否则 输出超出范围
 */
$day = 15;
if($day>=1 && $day<=10){
	echo '上旬';
}elseif($day>=11 && $day<=20){
	echo '中旬';
}elseif($day>=21 && $day<=31){
	echo '下旬';
}else{
	echo '超出范围';
}
echo '<hr/>';
/*  $score = 88;
 *  如果$score 在 [90,100]   那么输出 优秀
*   如果$score 在 [80,90)  那么输出 良上
*   如果$score 在 [70,80)  那么输出 良下
*   如果$score 在 [60,70)  那么输出 及格
*   如果$score 在 [0,60)  那么输出 不及格
*   否则 输出超出范围
*/
$score =88;
if($score>=90 && $score<=100){
	echo '优秀';
}elseif($score>=80 && $score<90){
	echo '良上';
}elseif($score>=70 && $score<80){
	echo '良下';
}elseif($score>=60 && $score<70){
	echo '及格';
}elseif($score>=0 && $score<60){
	echo '不及格';
}else{
	echo '超出范围';
}
echo '<hr/>';
// 写等同与 if多分支语句的if嵌套语句
// 在else大花括号中写嵌套
$day = 15;
if($day>=1 && $day<=10){
	echo '上旬';
}else{
	if($day>=11 && $day<=20){
		echo '中旬';
	}else{
		if($day>=21 && $day<=31){
			echo '下旬';
		}else{
			echo '超出范围';
		}
	}
}







