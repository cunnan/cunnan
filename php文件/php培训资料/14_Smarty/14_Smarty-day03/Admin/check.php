<?php
require '../config.ini.php';
//检查用户名密码是否正确
require ROOT."Class/Db.class.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
//调用db的方法，查询
$Db=Db::getInstance();
$re=$Db->select('admin','*',"username='$username' and password='$password'");
//查询语句 select * from admin where username='' and password=''
if($re){
	$_SESSION['user']=array('id'=>$re[0]['id'],'username'=>$re[0]['username']);
	header("location:index.php");
}else{
	header("location:login.html");
}