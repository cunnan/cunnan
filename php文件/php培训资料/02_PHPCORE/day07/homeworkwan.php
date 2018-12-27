<?php
header('Content-Type:text/html;charset=utf-8');
// 方法一
for($i=5;$i>=1;$i--){ //行
	for($j=1;$j<=$i;$j++){//列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
echo '<br/>';
// 方法二
$n = 5;
for($i=1;$i<=$n;$i++){ //行
	for($j=1;$j<=$n-$i+1;$j++){//列
		echo '*&nbsp;';
	}
	echo '<br/>';
}
echo '<br/>';
$n = 5;
for($i=1;$i<=$n;$i++){ //行
	for($j=1;$j<=$n;$j++){ //列
		if($i==1 || $i==$n || $j==$n-$i+1){
		    echo '*&nbsp;';
		}else{
			echo '~&nbsp;';
		}
	}
	echo '<br/>';
}
echo '<br/>';
$n = 5;
for($i=1;$i<=$n;$i++){ //行
	for($j=1;$j<=$n;$j++){ //列
		if($j==$i || $j==$n-$i+1){
			echo '*&nbsp;';
		}else{
			echo '~&nbsp;';
		}
	}
	echo '<br/>';
}

echo '<hr/>';
// 判断具体 一个 变量 $var =273 是否存在数字7
$var = 273;
$flag =false;
for($i=0;$i<strlen($var);$i++){
	$x =substr($var,$i,1);     //通过循环截取数值的每位
    if($x==7){
    	$flag = true;
    	break;
    }
}
if($flag){
	echo $var.'存在7';
}else{
	echo $var.'不存在7';
}
echo '<br/>';
// 判断范围  1-999 中存在数字7 
for($k=1;$k<=999;$k++){
	$flag =false;
	for($i=0;$i<strlen($k);$i++){
		$x =substr($k,$i,1);     //通过循环截取数值的每位
		if($x==7){
			$flag = true;
			break;
		}
	}
	if($flag){
		echo $k.'存在7<br/>';
	}
}
echo '<hr/>';
$arr1 = array(
      0=>'userName',
	  1=>'age',
      2=>'sex',
      3=>'salary'
);
$arr2 = array(
	  0=>'tom',
	  1=>18,
      2=>'男',
      3=>8888.88
);
foreach($arr1 as $k=>$v){
	           // $k 0 1 2 3
	           // $v userName age...
	$newarr[$v] = $arr2[$k];
	/* $newarr['username'] = $arr2[0]='tom';
	 * $newarr['age'] = $arr2[1] =18;
	 * $newarr['sex'] = $arr2[2] ='男';
	 * $newarr['salary'] = $arr2[3] =8888.88;
	 */
}
echo '<pre>';
print_r($newarr);
echo '</pre>';






































