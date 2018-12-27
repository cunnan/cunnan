<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
require ROOT.'function/function.php';
//保存表单的数据到表news
$arr=uploadFile(ROOT."upload/");
if($arr){
	$fileName=$arr[0]['name'];
	$_POST['imagename']=$fileName;
}
$db=Db::getInstance();
$_POST['addtime']=time();
$re=$db->insert('news',$_POST);
if($re){
	//静态化
	//给模板传值
	$smarty->assign('arr',$_POST);
	//获取当前这篇文章的运行结果
	$content=$smarty->fetch("news/detail.html");
	//写文
	$fileName=$db->getLastInsertId().".html";
	$f=fopen(ROOT."html/".$fileName,'w');
	$len=fwrite($f,$content);
	if($len){
		$message="静态化完成";
	}else{
		$message="静态化失败";
	}
	fclose($f);
	//关闭文件资源
	jump("添加成功，{$message}",'oper.php');
	
	
	
	
	
	
	
	
	
}else{
	jump("添加失败","add.php");
}