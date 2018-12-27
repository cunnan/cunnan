<?php
	namespace Home\Controller;
	use Think\Controller;

	class RegisterController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//用户协议
		public function article()
		{
			$this->display();
		}
		//忘记密码
		public function password()
		{
			$this->display();
		}
	}
?>