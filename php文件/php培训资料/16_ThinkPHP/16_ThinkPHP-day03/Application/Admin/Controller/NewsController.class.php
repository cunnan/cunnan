<?php
namespace Admin\Controller;
class NewsController extends BaseController{
	
	function oper(){//呈现文章列表
		$type=new \Common\Model\TypeModel();
		$optStr=$type->showOption();
		//接收typeid，判断typeid是否存在
		$where="";
		if(isset($_GET['typeid'])){
			$where="typeid={$_GET['typeid']}";
		}
		$news=new \Common\Model\NewsModel();
		//文章总记录数
		$num=$news->where($where)->count();
		//使用分页类
		$pageSize=2;
		$page=new \Think\Page($num,$pageSize);
		//获取limit的起始位置值
		$start=$page->firstRow;
		$arr=$news->where($where)
				  ->join("type as t on n.typeid=t.id")
				  ->alias("n")
				  ->order("n.id desc")
				  ->field("n.*,t.tname")
				  ->limit("$start,$pageSize")
				  ->select();
		//设置分页的效果
		$page->setConfig('prev',"上一页");
		$page->setConfig('next',"下一页");
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		//获取分页的结果
		$pageStr=$page->show();
		$this->assign('pageStr',$pageStr);
		$this->assign('arr',$arr);
		$this->assign('optStr',$optStr);
		$this->display();
	}
	/**
	 * 呈现文章添加的表单
	 */
	function add(){
		//获取分类下拉框中的内容
		$type=new \Common\Model\TypeModel();
		$str=$type->showOption();
		$this->assign('str',$str);
		$this->display();
	}
	/**
	 * 调用M层，实现表单数据入表 news
	 */
	function save(){
		$news=new \Common\Model\NewsModel();
		$_POST['addtime']=time();
		$re=$news->data($_POST)
				 ->add();
		if($re){
			$this->success("添加成功",U("News/oper"),3);
		}else{
			$this->error("添加失败",U("News/add"),3);
		}
	}
	
	function update(){
		$type=new \Common\Model\TypeModel();
		$str=$type->showOption();
		//根据文章id，获取文章记录
		$id=$_GET['id'];
		$news=new \Common\Model\NewsModel();
		$arr=$news->where("id=$id")->find();
		$this->assign('arr',$arr);
		$this->assign('str',$str);
		$this->display();
	}
	function usave(){
		$news=new \Common\Model\NewsModel();
		$id=$_POST['id'];
		$re=$news->where("id=$id")
			 	 ->data($_POST)
			 	 ->save();
		if($re){
			$this->success("修改成功",U("News/oper"));
		}else{
			$this->error("修改失败",U("News/oper"));
		}
		
	}
	function del(){
		//实例化数据模型类对象
		$news=new \Common\Model\NewsModel();
		//接收id值
		$id=$_GET['id'];
		//指定条件，操作
		$re=$news->where("id=$id")->delete();
		if($re){
			$this->success("删除成功",U("News/oper"));
		}else{
			$this->error("删除失败",U("News/oper"));
		}
	}
	
	
	
	
	
}
