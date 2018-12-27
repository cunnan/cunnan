<?php
namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller
{
	public function index()
	{
		//获得订单编号
		$orderId = time().rand(0,9).rand(0,9).rand(0,9);
		//查询订单总价
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carview")->where("userId={$userId}")->select();
		$totalPrice = getTotalPrice($carInfo);
		
		
		$this->assign("totalPrice",$totalPrice);
		$this->assign("orderId",$orderId);
		$this->display();
	}
	//完成订单结算
	public function order()
	{
		//开启事务
		M()->execute("start transaction");
		
		//1、向orderInfo表添加记录
		$_POST["userId"] = $_SESSION["userMsg"]["userId"];
		$result1 = M("orderinfo")->add($_POST);
		//2、向orderDetails表添加记录(查出carInfo表的记录，全部添加到orderDetails表)
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carinfo")->where("userId={$userId}")->select();
		$num = 0;
		foreach ($carInfo as $v)
		{
			$data = array(
				"orderId"=>$_POST["orderId"],
				"bookId"=>$v["bookId"],
				"bookCount"=>$v["bookCount"]
			);
			$result = M("orderdetails")->add($data);
			if($result > 0)
			{
				$num++;
			}
		}
		//3、清空购物车
		$result3 = M("carinfo")->where("userId={$userId}")->delete();
		
		
		if($result1 > 0 && $result3 > 0 && $num==count($carInfo))
		{
			M()->execute("commit");//提交事务
			$this->display();
		}
		else
		{
			M()->execute("rollback");//回滚事务
			$this->success("订单提交失败！",__APP__."/Order/index");
		}
	}
}












