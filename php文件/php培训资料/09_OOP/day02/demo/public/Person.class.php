<?php 
class Person{
	//定义成员属性 
	public $name;
	
	public function walk(){
		$this->say();
		echo $this->name." I can walk";
	}
	
	public function say(){
		echo "I can say<br/>";
	}
}
//被public修饰的成员属性和成员方法在类外被访问
$p = new Person;
$p->name = "tom";
echo $p->name;
echo "<br/>";
$p->walk();





















