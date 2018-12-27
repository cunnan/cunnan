<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
	function fun1(){
		//使用数据模型类 NewsModel。  select()
		$news=new \Common\Model\NewsModel();
		var_dump($news);
	}
}