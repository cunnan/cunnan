<?php

require '../config.ini.php';
$db=Db::getInstance();
//数据合法性验证
//1、用户名格式正确 要求:由字母数字下划线组成，
//数字不能开头 4到20位
$userName=$_POST['username'];
if(!preg_match("/^[a-z_]\w{3,19}$/i",$userName)){
	jump("用户名格式错误",'register.php');
	exit();
}
//2、用户名唯一性
$re=$db->select("user","username","username='$userName'");
if($re){
	jump("用户名已经被注册",'register.php');
	exit();
}
//3、密码 非空白字符，6-20位          
if(!preg_match("/^\S{6,20}$/",$_POST['password'])){
	jump("密码格式错误","register.php?source=".$_GET['source']);
	exit();
}
//4、两次密码输入一致
if($_POST['password']!=$_POST['repassword']){
	jump("两次密码输入不一致",'register.php');
	exit();
}
unset($_POST['repassword']);
unset($_POST['verify']);
unset($_POST['protocol']);
$url=$_POST['url'];
//var_dump($url);exit;
unset($_POST['url']);
$re=$db->insert("user",$_POST);
if($re){
	$id=$db->getLastInsertId();
	//创建会话变量   关闭页面自动清除
	setcookie("username",$userName,0,'/');
	setcookie('userid',$id,0,'/');
	jump("注册成功",$url);//???
}else{
	jump("注册失败",BASE_URL."user/register.php");
}











