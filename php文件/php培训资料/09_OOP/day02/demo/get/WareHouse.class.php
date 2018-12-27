<?php 
class WareHouse{
	private $keeper="tom";
	private $location="beijing"; //仓库地址
	
	//定义魔术方法__get
	/*
	 * 将获取仓库保管员的成员方法getKeeper() 
	 * 改写为魔术方法 __get()
	*/
	function __get($args){
		//$args keeper
		//$args loation
		return $this->$args;
		//echo $args;//参数就是在类外访问的私有化成员属性名称
	}
	
}
$w = new WareHouse;
echo $w->location;
           






