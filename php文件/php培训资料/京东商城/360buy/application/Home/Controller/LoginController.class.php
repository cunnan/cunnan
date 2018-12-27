<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class LoginController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		//通过问题找回密码
		public function qpassword()
		{
			$this->display();
		}
	}
?>