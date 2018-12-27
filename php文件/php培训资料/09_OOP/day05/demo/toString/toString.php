<?php 
class Person{
	function __toString(){
		return "this a Person class";
	}
	
}
$p = new Person;
echo $p;