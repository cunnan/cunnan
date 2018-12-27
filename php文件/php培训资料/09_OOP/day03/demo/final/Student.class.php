<?php
include "Person.class.php"; 
class Student extends Person{
	//子类中重载父类中的成员方法
	//被final修饰的成员方法不能够被重载
	function say(){
		echo 'I am a student';
	}
}