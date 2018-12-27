<?php
header('Content-Type:text/html;charset=utf-8');
// 获得 一周中的星期几
date_default_timezone_set('PRC');

getWeek();
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
echo 'hello<br/>';
getweek();


function getWeek(){
	$week = date('w');
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
	}
}











