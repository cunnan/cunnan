<?php
header('Content-Type:text/html;charset=utf-8');
// 输出 1-10中的前4个数 break
for($i=1;$i<=10;$i++){
	if($i>4){
		break;
	}
	echo $i.'<br/>';
}
echo '<br/>';
// 输出 1-10的数除了 4的值和 7的值 continue
for($i=1;$i<=10;$i++){
	if($i==4 || $i==7){
		continue;
	}
	echo $i.'<br/>';
}
echo '<hr/>';
//  输出 1-10偶数
for($i=1;$i<=10;$i++){
	if($i%2==0){
		echo $i.'<br/>';
	}
}
echo '<br/>';
// 方法2  用 continue实现
for($i=1;$i<=10;$i++){
   if($i%2!=0){
   	  continue;
   }
   echo $i.'<br/>';
}


































