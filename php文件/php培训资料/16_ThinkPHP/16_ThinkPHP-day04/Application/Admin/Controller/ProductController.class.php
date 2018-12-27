<?php
namespace Admin\Controller;
class ProductController extends BaseController{
	function add(){
		$this->display();
	}
	function save(){//表单数据处理
		//产品信息入表
		$product=M('product');
		$productId=$product->data($_POST)->add();
		if($productId){
			//上传图片  Upload.class.php
			if($_FILES){
				$upload=new \Think\Upload();
				$upload->mimes=array('image/png','image/gif','image/jpeg');
				$upload->maxSize=200000;
				$upload->autoSub=false;
				$upload->rootPath="./Public/";
				$upload->savePath="upload/";
				$imageArr=$upload->upload();
				if($imageArr){
					
					//图片入表productimage
					$productimage=M("productimage");
					foreach($imageArr as $v){
						$imagename=$v['savename'];
						$imageRe=$productimage->data(array('imagename'=>$imagename,'productid'=>$productId))->add();
					}
					if($imageRe){
						$message="图片上传并保存成功";
					}else{
						$message="图片上传成功,保存失败";
					}
					
				}else{
					$message="图片上传失败";
				}
			}
			$this->success("产品保存成功，$message",U("Product/oper"));
		}else{
			$this->error("产品添加失败",U("Product/add"));
		}
		
		
	}
	function oper(){
		$product=M("product");
		$arr=$product->select();
		$productimage=M("productimage");
		foreach($arr as $k=>$v){
			//获取此产品的一个图片
			$imageArr=$productimage->where("productid={$v['id']}")
						 		   ->find();
			if($imageArr){
				$arr[$k]['image']=$imageArr['imagename'];
			}else{
				$arr[$k]['image']='no.jpg';
			}
		}
		$this->assign('arr',$arr);
		$this->display();
	}
	
	function update(){
		$id=$_GET['id'];
		$product=M('product');
		$arr=$product->where("id=%d",array($id))->find();
		$this->assign('arr',$arr);
		$imageArr=M('productimage')->where('productid='.$id)->select();
		$this->assign('imageArr',$imageArr);
		$this->display();
	}
	function delimage(){
		$id=$_POST['id'];
		$imagename=$_POST['imagename'];
		$productimage=M("productimage");
		$re=$productimage->where("id=$id")->delete();
		if($re){
			@unlink("./Public/upload/".$imagename);
			$this->success("删除成功","",true);
		}else{
			$this->error("删除失败","",true);
		}
	}
	
	
	
	
	
	
	
	
}
