<?php 
class Person{
	public $name;	
	
	//构造方法
	function __construct(){
		
	}
	
	function walk(){
		echo "I can walk";
	}
	
	
	//定义析构方法
	function __destruct(){
		echo "bye";
	}
	
}

$p = new Person();

$p->walk();//I can walk
echo "<br/>";
$p->name = "tom";
echo $p->name; //tom
echo "<br/>";
//destruct

$p2 = new Person();

echo "<hr/>";
$p2->walk();
echo "<br/>";

$p3 = new Person();

echo "<hr/>";
$p3->walk();
echo "<br/>";























