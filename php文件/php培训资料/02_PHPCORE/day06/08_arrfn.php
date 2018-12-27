<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array('a','b','c','d');
// 将一维数组转为  形如 a*b*c*d 字符串
//echo join('*',$arr);
echo implode('*',$arr);
echo '<br/>';
/* SQL语句  
 *   update 表 set userName='rose',age=22,
 *          sex='女',salary=8888.88 [条件]  
 * 
 * $arr = array(
		'userName'=>'tom',
		'age' =>18,
		'sex' =>'男',
		'salary' =>8888.88
  );
  将数组转为 字符串  形如: userName='tom',age=18,
       sex='男',salary=8888.88
 */
$arr = array(
		'userName'=>'tom',
		'age' =>18,
		'sex' =>'男',
		'salary' =>8888.88
);
// 方法一: 用join
foreach($arr as $k=>$v){
	$newarr[] = $k.'='.$v;
	// $newarr[0] = username=tom;
	// $newarr[1] = age=18;
	// ...
}
/* echo '<pre>';
print_r($newarr);
echo '</pre>'; */
echo  join(',',$newarr);
echo '<br/>';
// 方法二: 不用join   empty:判断变量是否是空字符
$link ='';
foreach($arr as $k=>$v){
	if(empty($link)){
		$link.=$k.'='.$v;
	}else{
		$link.=','.$k.'='.$v;
	}
}
echo $link;



























