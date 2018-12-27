<?php 
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//1、PDO通知mysql编译sql语句
/*
 * 5、应用PDO准备语句，删除表中的一条记录，
 * 要求被删除的记录id以where条件给出，以参数？形式绑定参数。
 */
//1、PDO通知MySQL编译sql语句，此时编译不执行
$query = "delete from cms_admin where id=?";
$statm = $pdo->prepare($query);

//2、绑定参数
$id = 9;
$statm->bindParam(1,$id);

//3、执行
$result = $statm->execute();
var_dump($result);







































