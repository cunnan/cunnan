<?php 
class Person{
	public $name = "tom";
	public $width = 200;
	
	function walk(){		
		$width=100;
		var_dump($this->width);
		
	}
	
}
$p = new Person();
$p->walk();