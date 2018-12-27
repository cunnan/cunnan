<?php 
//2、应用PDO类，更新cms_news表中的tid字段，观察被影响的行数。
//1、实例化PDO类
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//执行sql语句
$query = "update cms_news set tid=2";
$result = $pdo->exec($query);
var_dump($result);

















