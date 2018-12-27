<?php
/*
 * 防止类对象被多次实例化，减少内存浪费
 */ 
class Single{
	static $obj = null;
	private function __construct(){
		
	}	
	private function __clone(){
		
	}
	
	static function getObj(){
		if(is_null(self::$obj)){
			self::$obj = new Single();
		}
		return self::$obj;
		
	}
	
}
//类此时禁止在类外被实例化





















