<?php 
//应用PDO完成注册
//实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//完成注册功能
//接收regist.htmlpost过来的数据
$username = isset($_POST['username'])?$_POST['username']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
//将用户提交的数据验证
if($username==""){
	echo 1;//用户名不能为空
	exit;
}

if($password==""){
	echo 2;//密码不能为空
	exit;
}

//向数据库注册
//将数据插入到cms_admin表中
//1、PDO通知MySQL编译sql语句，此时编译不执行
$query = "insert into cms_admin
		 (aname,pwd)
		 value
		 (:aname,:pwd)";
$statm = $pdo->prepare($query);

//2、PDOStatement类绑定参数
$statm->bindParam(":aname",$username);
$statm->bindParam(":pwd",$password);

//3、PDOStatement执行sql语句
$result = $statm->execute();
if($result){
	//注册成功
	echo 3;
}else{
	//注册失败
	echo 4;
}
//注册成功或者失败
//注册成功 返回值 3
//注册失败 返回值 4




















