<?php 
//定义构造方法
class Person{
	//成员属性
	public $name;
	public $age;
	
	//构造方法
	/*function Person(){
		echo "I am constructer";
	}*/
	
	//构造方法给成员属性赋初值
	function __construct($name,$age){
		$this->name = $name;
		$this->age = $age;
		
	}
}

$p = new Person("tom",10);
echo $p->name;
echo "<br/>";
$p2 = new Person("jerry",20);
echo $p2->name;




















