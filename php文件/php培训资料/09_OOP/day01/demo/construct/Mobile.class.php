<?php 
/*
 * 4、在Mobile类中对成员属性voltage应用构造方法赋初值。
 * 在类外对成员数属性voltage进行访问。
*/
class Mobile{
	public $voltage;
	
	//定义构造方法
	function __construct($voltage){
		$this->voltage = $voltage;
	}		
}
$m = new Mobile(220);
echo $m->voltage;









