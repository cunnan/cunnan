<?php 
//保证类仅仅被实例化一次
/*
 * 1、要求类不能在类外被实例化，将构造方法私有化
 */
class Single{
	static $obj = null;
	//将构造方法私有化，类不能在类外被实例化
	private function __construct(){
		
	}	
	private function __clone(){
		
	}
	
	//在类里定义成员方法 getObj，获取类对象
	static function getObj(){
		if(is_null(self::$obj)){//self::$obj = null
			self::$obj = new Single();//self::$obj = obj
		}
		return self::$obj;
	}
	
	function __destruct(){
		echo "bye";
	}	
}
$s = Single::getObj();//$s Single类的类对象
$s2 = Single::getObj();







































