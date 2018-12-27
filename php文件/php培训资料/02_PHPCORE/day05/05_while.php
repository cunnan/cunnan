<?php
header('Content-Type:text/html;charset=utf-8');
// for循环输出  1-5 的数
for($i=1;$i<=5;$i++){
	echo $i.'<br/>';
}
// while 实现 1-5
$i = 1;
while($i<=5){
  echo $i.'<br/>';	
  $i++;	
}

// do...while 实现 1-5
$i =1;
do{
  echo $i.'<br/>';
  $i++;
	
}while($i<=5);
echo '<hr/>';
//  如果第一次判断的条件为假，do...while
//比  while多执行一次
$i = 6;
while($i<=5){
  echo 'hello';	
  $i++;	
}
echo '<hr/>';
$i =6;
do{
  echo 'hello';	
  $i++;	
}while($i<=5);

echo '<hr/>';
/*c. for和 while,for一般精确次数的循环,
  while 可以实现不定次数循环  */
// 用 mt_rand(0,9) 输出  4个五
$link ='';
while(strlen($link)<4){
	$rand = mt_rand(0,9);
	if($rand==5){
	   $link.=$rand;
	}
}
echo $link;
echo '<br/>';
/* $link ='';
for($i=1;$i<=strlen($link);$i++){
	$rand = mt_rand(0,9);
	if($rand==5){
		$link.=$rand;
	}
}
echo $link; */




































