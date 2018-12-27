<?php
namespace Home\Controller;
use Think\Controller;
class UservipController extends Controller{
	function reg(){
		if(!empty($_POST)){
			$uservip=D('Uservip');//U() M() D()
			//创建数据
			$re=$uservip->create();
			if($re){
				//保存
				$num=$uservip->add();
				if($num){
					$this->success("注册成功",U("Index/index"));
				}else{
					$this->error("注册失败",U("Uservip/reg"));
				}
			}else{
				//数据验证出错
				$errorArr=$uservip->getError();
				$this->assign('eArr',$errorArr);
				$this->assign('arr',$_POST);
				//$this->error($error,U('Uservip/reg'));
				$this->display();
			}
			
		}else{
			$this->display();
		}
	}
}