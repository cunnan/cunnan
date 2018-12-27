<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//1、PDO通知mysql编译sql语句
$query = "update cms_admin set pwd='123' 
		   where id=? or id=?";
$statm = $pdo->prepare($query);
//2、绑定参数（可选）
$id = 29;
$statm->bindParam(1,$id);
$id1 = 30;
$statm->bindParam(2,$id1);
//3、执行
$result = $statm->execute();
var_dump($result);





















