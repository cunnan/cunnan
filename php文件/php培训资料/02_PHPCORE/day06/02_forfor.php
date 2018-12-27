<?php
header('Content-Type:text/html;charset=utf-8');
// 嵌套循环:外循环执行一次,内循环完成所有逻辑
// 分析1:行列图像分析
for($i=1;$i<=5;$i++){ //行
	//echo '外循环:'.$i.'<br/>';
	for($j=1;$j<=3;$j++){ //列
		echo '---内循环:'.$j;
	}
	echo '<br/>';
}
// 嵌套循环:4行3列的表数据
$link='';
$link .='<table>';
for($i=1;$i<=4;$i++){ //行
	$link.='<tr>';
	for($j=1;$j<=3;$j++){//列
		$link.='<td>xxx</td>';
	}
	$link.='</tr>';
}
$link .='</table>';
echo $link;
echo '<br/>';
// 工作中常用: 列名称都是确定知道的
$link='';
$link .='<table>';
for($i=1;$i<=4;$i++){ //行
	$link.='<tr>';
	$link.='<td>xxx</td>';
	$link.='<td>xxx</td>';
	$link.='<td>xxx</td>';
	$link.='</tr>';
}
$link .='</table>';
echo $link;

echo '<hr/>';
// 嵌套循环输出  5行和5列正方形图形(符号:*)
for($i=1;$i<=5;$i++){ //行
	for($j=1;$j<=5;$j++){ //列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
// 5行和5列直角三角图形
for($i=1;$i<=5;$i++){ //行
	for($j=1;$j<=$i;$j++){ //列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
// 九九乘法口诀表
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $i*$j.'&nbsp;';
	}
	echo '<br/>';
}
echo '<hr/>';
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $j.'*'.$i.'='.$i*$j.'&nbsp;';
	}
	echo '<br/>';
}
echo '<hr/>';
//条件控制输出  输出 N  (字母E)
$n = 5;
for($i=1;$i<=$n;$i++){ //行
	for($j=1;$j<=$n;$j++){ //列
		if($j==$i || $j==1 || $j==$n){
		    echo '*&nbsp;';
		}else{
			echo '~&nbsp;';
		}
	}
	echo '<br/>';
}
echo '<br/>';
$n = 11;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if($i==1|| $i==$n ||$i==ceil($n/2)||$j==1){
		    echo '*&nbsp;';
		}else{
			echo '~&nbsp;';
		}
	}
	echo '<br/>';
}















































































