<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	public function index()
	{
		$this->display();
	}
	//登陆处理
	public function login()
	{
		//获得表单提交的数据
		$userName = $_POST["userName"];
		$password = $_POST["password"];
		//登陆验证
		$userInfo = M("userinfo")->where("userName='{$userName}' and password='{$password}'")->find();
		
		if($userInfo == NULL)
		{
			$this->success("用户名或密码错误！",__APP__."/Login/index");
		}
		else
		{
			$_SESSION["userMsg"] = $userInfo;
			$this->success("会员登陆成功！",__APP__."/Index/index");
		}
	}
}









