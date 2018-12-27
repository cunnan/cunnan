<?php
header('Content-Type:text/html;charset=utf-8');
$arr= array(
	   'aaa'=>array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88),
	   'bbb'=>array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>8777.88),
	   'ccc'=>array('userName'=>'john','age'=>22,'sex'=>'男','salary'=>8999.88),
       'ddd'=>array('userName'=>'alice','age'=>17,'sex'=>'女','salary'=>8766.88)
);
foreach($arr as $v){ //$v 一维数组
	$newarr[] = $v;
	/* $newarr[0] = array('userName'=>'tom','age'=>18,'sex'=>'男','salary'=>8888.88);
	 * $newarr[1] = array('userName'=>'rose','age'=>20,'sex'=>'女','salary'=>8777.88);
	 * $newarr[2] = array('userName'=>'john','age'=>22,'sex'=>'男','salary'=>8999.88);
	 * ...
	 */
}
echo '<pre>';
print_r($newarr);
echo '</pre>';

echo '<hr/>';
// 判断变量是否是数组中的值，松散比较 不用in_array实现
$var ='a';
$arr = array('a','b','c','d');
$flag = false;
foreach($arr as $v){
	if($var==$v){
		$flag =true;
		break;
	}
}

if($flag){
	echo $var.'是数组中的值';
}else{
	echo $var.'不是数组中的值';
}


























