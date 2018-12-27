<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	function index(){
		$this->display();
	}
	function check(){
		//检查用户名密码是否正确
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		//$ob=new \Think\Model('admin');
		$ob=M('admin');
		$arr=$ob->where("username='%s' and password='%s'",array($username,$password))
		   		->find();
		if($arr){
			setcookie('username',$arr['username'],0,'/');
			setcookie('userid',$arr['id'],0,'/');
			$this->success("登录成功",U("Index/index"));
		}else{
			$this->error("登录失败",U("Login/index"));
		}
		
		
		
	}
}