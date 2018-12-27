<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
	function form(){
		$this->display();
	}
	function save(){
		//验证验证码
		$verify=new \Think\Verify();
		$re=$verify->check($_POST['verify']);
		if(!$re){
			$this->error("验证码错误",U("Test/form"));
			exit();
		}
		//upload
		$upload=new \Think\Upload();
		$upload->mimes=array('image/png',"image/jpeg",'image/gif');
		$upload->maxSize=200000;
		$upload->rootPath="./Public/";
		$upload->savePath="upload/";
		$arr=$upload->upload();
		if($arr){
			$image=new \Think\Image();
			//生成缩略图
			foreach($arr as $v){
				//加水印
				$imagePath="./Public/".$v['savepath'].$v['savename'];
				$image->open($imagePath)->water("./Public/logo.png")->save($imagePath);
				
				
				
				$toPath="./Public/".$v['savepath']."s_".$v['savename'];
				$re=$image->thumb(100,100)->save($toPath);
			}
			var_dump($re);
			
		}else{
			var_dump($upload->getError());
		}
	}
	
	function showVerify(){
		$verify=new \Think\Verify();
		$verify->entry();
	}
	
	
	
	
	
	
}