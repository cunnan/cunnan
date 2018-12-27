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
		//1、获得ajax提交的数据
		$carId = $_POST["carId"];
		$bookCount = $_POST["bookCount"];
		//2、修改数据库中指定产品的数量
		$result = M("carinfo")->where("carId={$carId}")->setField("bookCount",$bookCount);
		//3、查询所有商品总价、该商品总价
		$totalPrice = 0;//所有商品总价
		$price = 0;//该商品总价
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carview")->where("userId={$userId}")->select();
		foreach ($carInfo as $v)
		{
			$a = $v["price"] * $v["bookCount"];
			$totalPrice += $a;//计算所有商品总价
			if($carId == $v["carId"])
			{
				$price = $a;//获得刚修改完的产品的总价
			}
		}
		//4、将两个总价返回给客户端的ajax
		$arr = array(
			"totalPrice"=>$totalPrice,
			"price"=>$price
		);
		$json = json_encode($arr);//将数组转成json串
		echo $json;
	}
}










