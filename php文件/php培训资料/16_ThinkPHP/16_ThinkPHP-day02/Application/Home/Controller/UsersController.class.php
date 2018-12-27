<?php 
namespace Home\Controller;
use Think\Controller;
class UsersController extends Controller{
	//控制器子类的构造函数
	public function _initialize(){
		$this->username = '张三';
	}
	public function index(){		
		$this->display();
	}
}