<?php
include "Person.class.php"; 
class Student extends Person{
	
	function walk(){
		//在子类中要访问父类中被重载了的成员方法
		parent::say();
		echo "<hr/>";
		$this->say();
	}
	//在子类中重载父类中的成员方法
	function say(){		
		echo "I am a student";
		parent::say();
	}
}
$s = new Student;
$s->say();















