<?php 
/*
 * 1、定义类Mobile，类中有成员属性voltage和成员方法 call。
 */
/*
 * 2、实例化类Mobile，对Mobile类的成员属性voltage
 * 赋值为220，在类外访问成员属性voltage.
 */
class Mobile{
	public $voltage;
	
	
	function call(){
		
	}
}
$m = new Mobile;
$m->voltage = 220;
echo $m->voltage;























