<?php 
header("Content-Type:text/html;charset=utf-8");
//定义抽象类USB
abstract class USB{
	abstract function start();
	abstract function stop();
	abstract function run();
}
//定义风扇类
class Fan extends USB{
	function start(){
		echo "我是风扇，我正在加载<br/>";
	}
	
	function stop(){
		echo "我是风扇，我正在停止<br/>";	}
	
	function run(){
		echo "我是风扇，我正在运行<br/>";
	}

}
//定义子类Mouse继承抽象类USB
class Mouse extends USB{
	function start(){
		echo "我是鼠标，我正在加载<br/>";
	}
	
	function stop(){
		echo "我是鼠标，我正在停止<br/>";
	}
	
	function run(){
		echo "我是鼠标，我正在运行<br/>";
	}
}



//定义电脑类
class Computer{
	//参数 $u 必须是继承了USB抽象类的子类的类对象
	//判断一个类的类对象是否属于这个类
	
	/*function useUsb($u){
		if($u instanceof USB){
			$u->start();
			$u->run();
			$u->stop();
		}else{
			echo "非法类对象";
		}	
	}*/
	function useUsb(USB $u){//$u Mouse类的类对象
		$u->start();
		$u->run();
		$u->stop();		
	}
}

//定义工人类
/*
 * 1、定义一个风扇类。继承USB抽象类，在getWork成员方法中
 * 应用风扇类。              

 */
class Worker{
	function getWork(){
		$c = new Computer;
		$m = new Mouse;
		//实例化风扇类
		$f = new Fan;
		$c->useUsb($m);
		$c->useUsb($f);
	}
}
$w = new Worker();
$w->getWork();













