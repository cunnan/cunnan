<?php
class Test{
	private $arr=array(
			'mimes'=>array(),
	);
	function __set($name,$value){
		$this->arr[$name]=$value;
	}
}
$ob=new Test();
var_dump($ob);
$ob->mimes=array('image/png','image/png','image/gif');
var_dump($ob);