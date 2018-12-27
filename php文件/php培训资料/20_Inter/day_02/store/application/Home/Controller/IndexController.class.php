<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index()
	{
		//查询所有商品
		$bookInfo = M("bookinfo")->select();
		
		
		$this->assign("bookInfo",$bookInfo);
		$this->display();
	}
}









