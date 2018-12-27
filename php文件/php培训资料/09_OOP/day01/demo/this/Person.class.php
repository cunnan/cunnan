<?php
/*
 * 在类外访问成员属性和成员方法通过 类对象
 * 在类里面访问成员属性和成员方法通过 $this
 */ 

class Person{
	//成员属性
	public $name="tom";	
	
	//声明成员方法
	function walk(){
		$this->say();
		echo $this->name." I can walk";//tom I can walk
	}
	
	function say(){
		echo "I can say";
	}
}
$obj = new Person;
$obj->walk();











