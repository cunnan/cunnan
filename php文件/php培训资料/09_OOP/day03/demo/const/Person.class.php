<?php 
header("Content-Type:text/html;charset=utf-8");

class Person{
	//define("COUNTRY","中国"); //define不能用于在类中定义常量
	//定义常量
	const COUNTRY="中华人民共和国";
	
	function say(){
		echo "我是".self::COUNTRY."人";
	}
}
//在类外访问常量
echo Person::COUNTRY;
echo "<hr/>";
$p = new Person();
$p->say();


























