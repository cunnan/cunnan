<?php
header('Content-Type:text/html;charset=utf-8');
// 比较数组中的两个值大小(按小大排序)
$arr = array(7,3);
if($arr[0]>$arr[1]){
  $tmp = $arr[0];
  $arr[0] = $arr[1]; //变量赋值,后面的值覆盖前的值
  $arr[1] = $tmp;
}
echo '<pre>';
print_r($arr);
echo '</pre>';
// 冒泡排序算法
$arr = array(3,6,4,2,11,10,5);
/* （3,6）,4,2,11,10,5
 *  3,（4,6）,2,11,10,5
 *  3,4,（2,6）,11,10,5
 *  3,4,2,（6,11）,10,5
 *  3,4,2,6,（10,11）,5
 *  3,4,2,6,10,（5,11）*/
// 1. 相邻的两个元素两两比较大小(小大排序),实现最大值下沉
$count = count($arr);
for($i=0;$i<$count-1;$i++){
   if($arr[$i]>$arr[$i+1]){
   	  $tmp = $arr[$i];
   	  $arr[$i] = $arr[$i+1];
   	  $arr[$i+1]= $tmp;
   }	
}
echo '<pre>';
print_r($arr);
echo '</pre>';
// 2.将每个元素（外轮次）按上面的步骤，实现剩下元素最大值下沉
// 除了最小值元素，每个元素比较的次数越来越少(倒三角)
for($k=1;$k<$count;$k++){
	for($i=0;$i<$count-$k;$i++){
		if($arr[$i]>$arr[$i+1]){
			$tmp = $arr[$i];
			$arr[$i] = $arr[$i+1];
			$arr[$i+1]= $tmp;
		}
	}
}
echo '<pre>';
print_r($arr);
echo '</pre>';





















