<?php 
header("Content-Type:text/html;charset=utf-8");
class Person{
	//声明静态化的成员属性
	static $country = "中国";
	public $name;
	
	//声明静态化的成员方法
	
	static function say(){
		//不能在静态化的成员方法中访问非静态化的成员属性
		//和非静态化的成员方法
		//$this->name;
		//$this->walk();
		//在类里访问静态化的成员属性 
		echo self::$country;
		echo 'I can say';
	}
	
	function walk(){
		//在类里访问静态化的成员方法
		self::say();
	}
}
//静态化的成员属性和成员方法在类外被访问
//静态化的成员属性
echo Person::$country;
echo "<hr/>";
Person::say();
echo "<hr/>";
$p = new Person();
$p->walk();












