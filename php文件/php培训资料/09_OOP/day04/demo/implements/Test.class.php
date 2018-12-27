<?php 
//定义接口
interface Test{
	const DNS = "www.baidu.com";
	
    function say(); 
}

interface TestA extends Test{
	
}

class Person implements Test,TestA{
	function say(){
		
	}
}







