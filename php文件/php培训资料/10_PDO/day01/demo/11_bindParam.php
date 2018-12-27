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
		  (?,?,?,?)";
$statm = $pdo->prepare($query);
//2、绑定参数
$username = "john";
$statm->bindParam(1,$username);
$password = "123";
$statm->bindParam(2,$password);
$email = "john@qq.com";
$statm->bindParam(3,$email);
$birthday = "2016-01-01";
$statm->bindParam(4,$birthday);

//3、执行
$result = $statm->execute();
var_dump($result);

































