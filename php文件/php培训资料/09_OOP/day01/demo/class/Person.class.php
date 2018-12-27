<?php 
//声明一个类
class Person{
	//成员属性
	public $name;
	public $sex;
	public $age;
	
	//成员方法
	function walk(){
		echo 'I can walk';
	}
}
//在类外获取类对象
$obj = new Person;
//类对象对于成员属性的访问
$obj->name = "tom";
echo $obj->name; 
echo "<br/>";
$obj->sex = "male";
echo $obj->sex;

echo "<hr/>";
$obj2 = new Person;
$obj2->name = "jerry";
echo $obj2->name;
echo "<br/>";
$obj2->sex = "famale";
echo $obj2->sex;

echo "<hr/>";

echo $obj->name;
echo "<hr/>";
//类对象对于成员方法的访问
$obj->walk();
echo "<hr/>";
$obj2->walk();
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";















