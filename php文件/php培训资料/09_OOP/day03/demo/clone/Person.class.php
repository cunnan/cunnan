<?php 
class Person{
	public $name;
	
	//定义魔术方法__clone
	function __clone(){
		$this->name = "john";
	}
}
$p = new Person;
/*$p->name = "tom";
echo $p->name;
$p1 = $p;
echo $p1->name;
echo "<hr/>";
$p->name = "jerry";
echo $p1->name;
//通过clone 产生类对象$p2
echo "<hr/>";*/
$p2 = clone $p;
//将$p所指向的内存空间复制给$p2
/*echo $p2->name;
echo "<hr/>";
$p->name = "jack";;
echo $p2->name;*/
echo $p2->name;
echo "<hr/>";
$p3 = clone $p;
echo $p3->name;

























