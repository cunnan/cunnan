<?php
header('Content-Type:text/html;charset=utf-8');
class Users{
	function __construct(){
		echo 'AB<br><br>';
		//理论上的构造函数
		//这个方法被真正的构造函数所调用
		//也就意味着该方法在实例化对象时也被自动调用
		//也就起到了构造函数的作用!!!
		$this->fun1();
	}
	function fun1(){
		echo 'CD<br><br>';
		$this->fun2();
	}
	function fun2(){
		echo '12<br><br>';
	}
}

$user = new Users();

