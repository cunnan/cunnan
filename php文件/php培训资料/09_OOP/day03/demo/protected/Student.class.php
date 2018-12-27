<?php
include "Person.class.php"; 
class Student extends Person{
	function study(){
		$this->say();
		echo $this->name;
	}
	
	function test(){
		$this->walk();
		echo $this->age;
	}
	
	//测试父类中的私有化成员属性和成员方法能否在子类中被访问
	function testPrivate(){
		//echo $this->sex; //在父类中定义的私有化的成员属性
		                   //不能在子类中被访问 
		//$this->eat();//在父类中定义的私有化的成员方法
		               //在子类中不能被访问。   
	}
}
$s = new Student;
//$s->study();
//$s->test();
$s->testPrivate(); 










