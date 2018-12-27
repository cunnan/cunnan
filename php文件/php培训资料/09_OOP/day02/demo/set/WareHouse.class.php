<?php 
header("Content-Type:text/html;charset=utf-8");
class WareHouse{
	private $keeper;//tom,jerry
	private $location;	//beijing,shanghai beijing
	private $test;
	
	function __set($method,$args){
		//method 在类外设置的私有化成员属性的名称
		//args   在类外设置的私有化成员属性的值
		//实现对私有化成员属性取值的过滤
		//例如：要求keeper仅仅能为 tom jerry 默认是tom
		if($method=="keeper"){
			$can_keeper = array("tom","jerry");
			if(in_array($args,$can_keeper)){
				$this->$method = $args; 
			}else{
				$this->$method = "tom";
			}	
		}else if($method=="location"){
			//beijing,shanghai beijing
			$can_location = array("beijing","shanghai");
			if(in_array($args,$can_location)){
				$this->$method = $args;
			}else{
				$this->$method = "beijing";
			}
		}else{
			echo "这个私有化成员属性禁止被访问";
		}	
	}
	
	function __get($args){
		return $this->$args;
	}
	
}
$w = new WareHouse;
$w->keeper = "jack"; //在类外访问私有化成员属性，不允许
echo $w->keeper;
echo "<br/>";
$w->location = "guangzhou";
echo $w->location;
$w->test = "test";
















