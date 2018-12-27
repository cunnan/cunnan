<?php
header('Content-Type:text/html;charset=utf-8');
$num1 = $_POST['num1']; 
$num2 = $_POST['num2'];
$op =$_POST['op'];
//echo $num1,$op,$num2;
if(is_numeric($num1)&& is_numeric($num2)){
	if($op=='+'){
		$result = $num1 +$num2;
	}elseif($op=='-'){
		$result = $num1 -$num2;
	}elseif($op=='*'){
		$result = $num1 *$num2;
	}elseif($op=='/'){
		if($num2!=0){
			$result = $num1 /$num2;
		}else{
			die('除数不能为0');
		}
	}elseif($op=='%'){
		if($num2!=0){
			$result = $num1 %$num2;
		}else{
			die('除数不能为0');
		}
	}
}else{
	die('操作数必须是数值');
}
echo $num1.$op.$num2.'='.$result;