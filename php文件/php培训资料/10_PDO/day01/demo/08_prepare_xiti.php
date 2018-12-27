<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
/*
 * 4、应用PDO准备语句，向cms_admin表中插入一条数据记录。
 * 观察执行后的返回。
 */
//1、PDO通知MySQL编译sql语句，此时sql语句仅仅是被编译，不执行
$query = "insert into cms_admin
		  (aname,pwd)
		  value
		  ('rose101','999')";
$statm = $pdo->prepare($query);

//2、如果sql语句中含有参数，则参数绑定，若没有则此步省略
//3、执行
$result = $statm->execute();
var_dump($result);































