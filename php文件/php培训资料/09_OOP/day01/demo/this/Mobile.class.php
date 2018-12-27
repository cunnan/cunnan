<?php 
/*
 * 3、在Mobile类中对成员属性voltage赋值为220。
* 在成员方法call中访问成员属性voltage。输出voltage的值，
* 在类外实例化Mobile类。访问成员方法call。
*/
class Mobile {
	//声明成员属性
	public $voltage = 220;
	
	function call(){
		echo $this->voltage;
	}	
}
$m = new Mobile;
$m->call();






















