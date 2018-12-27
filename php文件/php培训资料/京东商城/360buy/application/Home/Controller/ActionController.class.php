<?php
	namespace Home\Controller;
	use Think\Controller;
	
	//此类为购物车产品处理类
	class ActionController extends Controller
	{
		public function index()
		{
			$this->redirect("Cart/index");
		}
	}
?>