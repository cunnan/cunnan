<?php
header('Content-Type:text/html;charset=utf-8');
// 索引+关联二维数组 循环遍历
$arr = array(
		0=>array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88),
		1=>array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>9888.88),
		2=>array('userName'=>'jerry','age'=>22,'sex'=>'男','salary'=>9998.88),
		3=>array('userName'=>'john','age'=>17,'sex'=>'女','salary'=>7888.88)
);
//方法一  :嵌套循环
foreach($arr as $val){ //行 $val 一维数组
	foreach($val as $k=>$v){//列
		echo  $v.'&nbsp;';
	}
	echo '<br/>';
} 
echo '<br/>';
// 方法二: 重要（效率高）
foreach($arr as $val){ //行 $val 一维数组
	     // 通过数组的下标找对应值  例如 $val['userName']
	echo $val['userName'].$val['sex'].$val['age'].$val['salary'].'<br/>';
}
























