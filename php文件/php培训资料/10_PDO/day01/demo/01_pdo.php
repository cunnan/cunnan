<?php 
//实例化PDO类，获取类对象
$dsn = "mysql:host=localhost;dbname=cms";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//var_dump($pdo);
//执行删除操作
//2、应用PDO类，更新cms_news表中的tid字段，观察被影响的行数。
$query = "delete from cms_news where id=6";
$result = $pdo->exec($query);
//打印被影响的行数
var_dump($result);
















