<?php 
class Person{
	private $name="tom";
	
	
	private function walk(){
		echo 'I can walk<br/>';
	}
	
	function say(){
		$this->walk();
		echo 'My name is '.$this->name;
	}
}
$p = new Person;
//$p->name; //在类外被private修饰的成员属性不能被访问。
//$p->walk();//被private修饰的成员方法在类外不能被访问。
$p->say();







