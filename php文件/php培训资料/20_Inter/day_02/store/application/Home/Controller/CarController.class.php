<?php
namespace Home\Controller;
use Think\Controller;

class CarController extends Controller
{
	public function index()
	{
		//查询carview视图，查询当前用户购买的所有商品
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carview")->where("userId={$userId}")->select();
		
		//获得所有商品总价
		//$totalPrice = getTotalPrice($carInfo);
		
		$this->assign("carInfo",$carInfo);
		$this->display();
	}
}










