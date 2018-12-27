<?php 
/*
 * 5、在Mobile类中定义析构方法，输出：destruct。
* 实例化Mobile类观察析构方法输出。
*/
class Mobile{
	
	//声明析构方法
	function __destruct(){
		echo "destruct";
	}
}
echo 1;
$m = new Mobile();
echo 2;
$mx = new Mobile();
echo 3;




















