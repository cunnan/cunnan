<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';
$db=Db::getInstance();
//上传图片
$path=ROOT."upload/";
$re=uploadFile($path);
if(is_array($re) && count($re)>0){
	$fileName=$re[0]['name'];
	//保存
	$_POST['imagename']=$fileName;
	$re=$db->insert("advinfo",$_POST);
	if($re){
		jump("保存成功","oper.php");
	}else{
		jump("保存失败","add.php");
	}
}else{
	jump("文件上传失败",'add.php');
}