<?php 
//实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);

//接收用户提交的数据
$username = isset($_POST['username'])?$_POST['username']:"";
if($username==""){
	echo 1;
	exit;
}

$password = isset($_POST["password"])?$_POST["password"]:"";
if($password==""){
	echo 2;
	exit;
}

$email =  isset($_POST["email"])?$_POST["email"]:"";
if($email==""){
	echo 3;
	exit;
}

$birthday = isset($_POST["birthday"])?$_POST["birthday"]:"";

//将获取到的数据 存入数据库
//1、PDO通知MySQL编译sql语句
$query = "insert into cms_user
		  (username,password,email,birthday)
		  value
		  (:username,:password,:email,:birthday)";
$statm = $pdo->prepare($query);

//2、绑定参数`
$statm->bindParam(":username",$username);
$password = md5($password);
$statm->bindParam(":password",$password);
$statm->bindParam(":email",$email);
$statm->bindParam(":birthday",$birthday);

//3、执行
$result = $statm->execute();
if($result){
	//注册成功
	echo 4;
}else{
	//注册失败
	echo 5;	
}





























