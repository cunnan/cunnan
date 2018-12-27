<?php
header('Content-Type:text/html;charset=utf-8');
//  累加求和算法
//  substr(string $var,int $start[,$length]) 可选参数
function isSum($n,$m=1){
   $sum =0;
   for($i=$m;$i<=$n;$i++){
   	  $sum += $i;
   }	
   echo $sum;
}
isSum(100);
echo '<br/>';
isSum(50);
echo '<br/>';
isSum(10);
echo '<br/>';
isSum(20,5);
echo '<hr/>';
/* 累加求和算法   parameter 参数 
 * @param int $n  必选参数
 * @parma int $m=1 可选参数
 * @return mixed
 */
function is_Sum($n,$m=1){ //形参:生存期函数调用的执行时间，短
   $sum =0;
   for($i=$m;$i<=$n;$i++){
   	  $sum += $i;
   }
   return $sum;	
}
$aa = is_Sum(100);
echo $aa;
echo '<br/>';
$var = 30;
echo is_Sum($var);//实参:生存期程序代码的执行时间，长

echo '<hr/>';
/* 判断变量是否对称(回文)算法
 * @param   mixed $n;
 * @return  bool
 */
function isTest($n){//形参
  $half = floor(strlen($n)/2);
  for($i=0;$i<$half;$i++){
  	 $x = substr($n,$i,1);
  	 $y = substr($n,-$i-1,1);
  	 if($x!=$y){
  	 	return false;
  	 }
  }	
  return true;
}
$var = 123494321;
if(isTest($var)){ //实参
   echo $var.'是对称';	
}else{
   echo $var.'不是对称';
}
echo '<hr/>';
/* 判断变量是数组中值  bool in_array(mixed $var,array $arr[,bool $strict=false])
* @param   mixed $n
* @param   array $arr
* @return  bool
*/
function inArray($n,$arr){
   foreach($arr as $v){
   	  if($n==$v){
   	  	return true;
   	  }
   }
   return false;	
}
$var = 'c';
$arr = array('a','b','c','d');
var_dump(inArray($var,$arr));

echo '<hr/>';
/* 判断变量是数组中值  bool in_array(mixed $var,array $arr[,bool $strict=false])
 * @param   mixed $n
* @param   array $arr
* @param  $strict=false 可选参数
* @return  bool
*/
function inArr($n,$arr,$strict=false){
	if($strict===true){
		// 严格比较
		foreach($arr as $v){
			if($n===$v){
				return true;
			}
		}
		return false;
		
	}else{
		// 松散比较代码
		foreach($arr as $v){
			if($n==$v){
				return true;
			}
		}
		return false;
	}
}
$var = true;
$arr = array('a','b','c','d');
var_dump(inArr($var,$arr,true));
echo '<br/>';
/* 封装  :获得文件扩展名
 * @param   string $n
 * @return  string 
 */
function getExtion($n){
	$str = substr($n,strrpos($n,'.')+1);
	return $str;
}
$var = '45.png.gif.html.jpg';
echo getExtion($var);


















































































