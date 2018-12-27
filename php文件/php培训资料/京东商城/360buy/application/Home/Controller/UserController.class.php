<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class UserController extends Controller
	{
		//个人中心首页
		public function index()
		{
			$this->display();
		}
		//用户信息
		public function profile()
		{
			$this->display();
		}
		//修改密码
		public function checkpwd()
		{
			
		}
		//修改个人信息
		public function checkprofile()
		{
			
		}
		//我的订单
		public function order()
		{
			$this->display();
		}
		//取消订单
		public function cancleorder()
		{
			
		}
		//查看订单详情
		public function orderdetails()
		{
			$this->display();
		}
		//收货地址
		public function address()
		{
			$this->display();
		}
		//我的收藏
		public function collection()
		{
			$this->display();
		}
		//我的留言
		public function message()
		{
			$this->display();
		}
		//我的标签
		public function tag()
		{
			$this->display();
		}
		//缺货登记
		public function booking()
		{
			$this->display();
		}
		//我的红包
		public function bonus()
		{
			$this->display();
		}
		//我的推荐
		public function affiliate()
		{
			$this->display();
		}
		//我的评论
		public function comment()
		{
			$this->display();
		}
		//跟踪包裹
		public function trackpackages()
		{
			$this->display();
		}
		//资金管理
		public function accountlog()
		{
			$this->display();
		}
		//充值
		public function accountdeposit()
		{
			$this->display();
		}
		//提现
		public function accountraply()
		{
			$this->display();
		}
		//查询帐户明细
		public function accountdetail()
		{
			$this->display();
		}
		//查看申请记录
		public function accountlist()
		{
			$this->display();
		}
		//退出登陆
		public function logout()
		{
			$this->display();
		}
	}
?>