<?php
header("Content-Type:text/html;charset=utf-8");
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root"; 
$pdo = new PDO($dsn,$username,$password);
//准备语句 
//1、PHP通知MySQL编译sql语句，此时仅编译 不执行
$query = "update cms_admin set pwd='123' where id=33";
$statm = $pdo->prepare($query);
//3、执行
$result = $statm->execute();
var_dump($result);
//返回没有返回结果集的sql语句执行的被影响行数 
echo "<br/>被影响行数".$statm->rowCount();









