<?php 
class WareHouse{
	//定义成员属性
	//仓库保管员的候选人仅仅只能是 tom和jerry，如果超出范围
	//默认为tom
	private $keeper; //仓库保管员
	
	function setKeeper($keeper){
		//定义候选仓库保管员名单
		$can_keeper = array("tom","jerry");
		//验证使用者提供的仓库保管员是否在候选人名单中
		if(in_array($keeper,$can_keeper)){
			$this->keeper = $keeper;
		}else{
			$this->keeper = "tom";
		}
	}
	
	
	//定义成员方法获取keeper的值
	
	function getKeeper(){
		return $this->keeper;
	}
}
$w = new WareHouse;
$w->setKeeper("jerry");
echo $w->getKeeper();









