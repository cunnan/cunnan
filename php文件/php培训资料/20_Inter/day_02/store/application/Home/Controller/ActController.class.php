<?php
namespace Home\Controller;
use Think\Controller;

//操纵购物车
class ActController extends Controller
{
	//购买商品
	public function index()
	{
		//1、获得要购买的产品信息
		$userId = $_SESSION["userMsg"]["userId"];
		$bookId = $_GET["bookId"];
		$bookCount = $_GET["bookCount"];
		//2、向carinfo表添加记录(考虑重复购买)
		$carInfo = M("carinfo")->where("userId={$userId} and bookId={$bookId}")->find();
		if($carInfo != NULL)
		{
			//原产品的数量累加
			$result = M("carinfo")->where("userId={$userId} and bookId={$bookId}")->setInc("bookCount",$bookCount);
		}
		else 
		{
			//添加一个新商品
			$data = array(
				"userId"=>$userId,
				"bookId"=>$bookId,
				"bookCount"=>$bookCount
			);
			$result = M("carinfo")->add($data);
		}
		
		//跳转到购物车的页面
		$this->redirect("Car/index");
	}
	//删除单个商品
	public function delete($carId)
	{
		//删除指定的记录
		$result = M("carinfo")->where("carId={$carId}")->delete();
		//跳转到购物车页面
		$this->redirect("Car/index");
	}
	//清空购物车
	public function clear()
	{
		//删除当前用户的所有商品
		$userId = $_SESSION["userMsg"]["userId"];
		$result = M("carinfo")->where("userId={$userId}")->delete();
		//跳转到购物车页面
		$this->redirect("Car/index");
	}
	//通过ajax修改产品数量
	public function change()
	{
		
	}
}










