<?php
class f{
	public $a=1;
	protected $b=2;
	private $c=3;
	function fun1(){
		echo $this->a;
	}
	function fun2(){
		echo $this->b;
	}
	function fun3(){
		echo $this->c;
	}
}
class s extends f{
	public $a=4;
	protected $b=5;
	private $c=6;
	function fun4(){
		echo $this->a;
	}
	function fun5(){
		echo $this->b;
	}
	function fun6(){
		echo $this->c;
	}
}
$ob=new s();
$ob->fun1();//4
$ob->fun2();//5
$ob->fun3();//3
$ob->fun4();//4
$ob->fun5();//5
$ob->fun6();//6