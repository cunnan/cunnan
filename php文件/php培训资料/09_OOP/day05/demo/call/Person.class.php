<?php 
header("Content-Type:text/html;charset=utf-8");
class Person{
	/*function a(){
		echo "aaaaa";
	}
	
	function b(){
		echo "bbbbb";
	}
	
	function c(){
		echo "ccccc";
	}*/
	function __call($method,$args){
		//$method 访问的不存在的成员方法的名称
		//$args 访问不存在成员方法时的参数
	    //将多个功能相似的成员方法封装到魔术方法call中。
	    //定义一个成员方法数组
	    $method_array = array("a","b","c");
	    if(in_array($method,$method_array)){
		    for($i=1;$i<=5;$i++){
		    	echo $method;
		    	echo '<br/>';
		    	echo 'arguments';
		    }
	    }else{
	    	echo "没有这个成员方法:".$method;
	    }
	}
}
$p = new Person;
$p->a();
echo "<br/>";
$p->b();
echo "<br/>";
$p->c();
echo "<br/>";
$p->d();









