<?php 
// 在项目中的公共函数
//判断邮箱合法性的自定义函数
function isEmail($email){
	//判断$email的合法性，
	//若$email合法则返回true否则返回false
	$pattern = "/^[0-9a-z]+([\.\-\_][a-z0-9]+)?@[a-z0-9]+\.(com|cn|org|net|com\.cn)$/i";
	
	$result = preg_match($pattern,$email);
	
	if($result>0){
		//合法的邮箱地址
		return true;
	}else{
		return false;
	}	
}

//验证出生日期的合法性
function isDate($birthday){
	//$birthday用户输入的日期
	$pattern = "/^\d{4}([\/\-])\d{2}\\1\d{2}$/";
	$result = preg_match($pattern,$birthday);
	if($result>0){
		//合法的日期
		return true;
	}else{
		return false;
	}
}






















