<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//1、PDO通知mysql编译sql语句
$query = "insert into cms_user
		  (username,password,email,birthday)
		  value
		  (:username,:password,:email,:birthday)";
$statm = $pdo->prepare($query);

//2、绑定参数
$username = "john02";
$statm->bindParam(":username",$username);
$password = "234";
$statm->bindParam(":password",$password);
$email = "john02@163.com";
$statm->bindParam(":email",$email);
$birthday = "2016-01-01";
$statm->bindParam(":birthday",$birthday);
//3、执行
$result = $statm->execute();
var_dump($result);










































