<?php
header('Content-Type:text/html;charset=utf-8');
/*递归:当调用函数A时,函数A又调用函数B,
                         而函数A和函数B是同一个函数,也就是
                         函数自己调用自己  
 */
/* 递归
 * (1) 递归是函数 
 * (2) 递归是不定次数循环（3条件）
 */
// 倒序输出  1-3的值
//方法一
for($i=3;$i>=1;$i--){
	echo $i.'<br/>';
}
echo '<hr/>';
// 方法二  递归
function isTest($n){
	//echo $n.'<br/>';// 3 2 1
	$n--;
	//echo $n.'<br/>';// 2 1 0
	if($n>0){
	  //echo $n.'<br/>';// 2 1
	  isTest($n);
	}
	echo $n.'<br/>'; // 0 1 2
	/* 第一层函数   $n-- -->$n=2  不执行echo
	 * 第二层函数  $n-- --> $n=1 不执行echo
	 * 第三层函数  $n-- --> $n=0 递归结束 输出echo $n=0
	 * 跳到第二层函数   echo $n=1
	 * 跳到第一层函数   echo $n=2
	 * 结束所有函数 
	 */
}
isTest(3);
echo '<hr/>';
/*递归实现阶乘算法  5! =1*2*3*4*5
 * @param
 * @return 
 */
function isJie($n){
   /* if($n<=1){
   	  return 1;}
   return $n*isJie($n-1); */
   if($n>1){
   	  return $n*isJie($n-1);
   }
   return 1;
}
/* return 5*isJie(4);  
 * return 5*return 4*isJie(3)
 * return 5*return 4*return 3*isJie(2)
 * return 5*return 4*return 3*return 2*isJie(1)
 * return 5*return 4*return 3*return 2*return 1; 递归结束
 * return 120 所有函数结束
 */
echo isJie(5);














































