<?php
header('Content-Type:text/html;charset=utf-8');
/*函数封装： 将一维数组转为字符串  
 * @param   string $glue
 * @param   array $arr
 * return  string
 */
function getJoin($glue,$arr){//形参
	$link='';
    foreach($arr as $v){
    	if(empty($link)){
    		$link.=$v;
    	}else{
    		$link.=$glue.$v;
    	}
    }
    return $link;		
}
$arr = array('a','b','c','d');
echo getJoin('===+',$arr);
echo '<hr/>';
/* 函数封装:将两个数组中相同的值组成一个新索引数组 in_array
 * @param  array $arr1
 * @param  array $arr2
 * @return array
 * */
function getTest($arr1,$arr2){
	$newarr=array();
	foreach($arr1 as $v){
		if(in_array($v,$arr2)){
			$newarr[] = $v;
		}
	}
	return $newarr;
}
$arr1 = array(8,9,15,22,27);
$arr2 = array(3,9,11,22,30);
$newarr =getTest($arr1,$arr2);
echo'<pre>';
print_r($newarr);
echo'</pre>';
echo '<hr/>';
/*递归实现求n个数 平方和算法
 * @param   int $n
 * @return  mixed
 */
function isPowSum($n){
	if($n>1){
	  return $n*$n + isPowSum($n-1);
	}
	return 1*1;
}
/* return 5*5 + isPowSum(4)
 * return 5*5 + return 4*4 +isPowSum(3)
 * return 5*5 + return  4*4 + return 3*3 + isPowSum(2)
 * return 5*5 + return  4*4 + return 3*3 + return 2*2 + isPowSum(1)
 * return 5*5 + return  4*4 + return 3*3 + return 2*2 + return 1*1; 递归结束
 * return 55; 所有函数结束
 */
echo isPowSum(5);


























